// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.

use crate::datatypes::*;
use crate::Result;

use oxidized::naming_types::KindOfType;
use oxidized::relative_path::RelativePath;
use rusqlite::{params, Connection, OptionalExtension};

#[derive(Clone, Debug)]
pub(crate) struct TypeItem {
    name: String,
    kind: KindOfType,
    file_info_id: i64,
}

pub fn create_table(connection: &Connection) -> Result<()> {
    let statement = "
        CREATE TABLE IF NOT EXISTS NAMING_TYPES (
            HASH INTEGER PRIMARY KEY NOT NULL,
            FLAGS INTEGER NOT NULL,
            FILE_INFO_ID INTEGER NOT NULL
        );";

    connection.execute(&statement, params![])?;
    Ok(())
}

// Used only in tests for now.
#[allow(dead_code)]
fn insert(connection: &Connection, items: &[TypeItem]) -> Result<()> {
    let insert_statement = "
        INSERT INTO NAMING_TYPES (
            HASH,
            FLAGS,
            FILE_INFO_ID
        ) VALUES (
            ?, ?, ?
        );";

    let mut insert_statement = connection.prepare(&insert_statement)?;

    for item in items {
        let hash = convert::name_to_hash(&item.name);

        insert_statement.execute(params![hash, item.kind as isize, item.file_info_id])?;
    }
    Ok(())
}

pub fn get_path(connection: &Connection, name: &str) -> Result<Option<(RelativePath, KindOfType)>> {
    let select_statement = "
        SELECT
            NAMING_FILE_INFO.PATH_PREFIX_TYPE,
            NAMING_FILE_INFO.PATH_SUFFIX,
            NAMING_TYPES.FLAGS
        FROM
            NAMING_TYPES
        LEFT JOIN
            NAMING_FILE_INFO
        ON
            NAMING_TYPES.FILE_INFO_ID = NAMING_FILE_INFO.FILE_INFO_ID
        WHERE
            NAMING_TYPES.HASH = ?
        ";

    let mut select_statement = connection.prepare_cached(&select_statement)?;
    let hash = convert::name_to_hash(&name);
    select_statement
        .query_row(params![hash], |row| {
            let prefix: SqlitePrefix = row.get(0)?;
            let suffix: SqlitePathBuf = row.get(1)?;
            let kind: SqliteKindOfType = row.get(2)?;
            Ok((RelativePath::make(prefix.value, suffix.value), kind.value))
        })
        .optional()
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_add_type() {
        let conn = Connection::open_in_memory().unwrap();
        create_table(&conn).unwrap();
        let types = [TypeItem {
            name: "Foo".to_string(),
            kind: KindOfType::TClass,
            file_info_id: 123,
        }];
        insert(&conn, &types).unwrap();
    }
}
