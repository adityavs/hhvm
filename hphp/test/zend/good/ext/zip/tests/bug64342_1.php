<?hh
<<__EntryPoint>>
function main_entry(): void {

  $dirname = dirname(__FILE__) . '/';
  include $dirname . 'utils.inc';
  $file = $dirname . '__tmp_oo_addfile.zip';

  copy($dirname . 'test.zip', $file);

  $zip = new ZipArchive;
  if (!$zip->open($file)) {
  	exit('failed');
  }
  if (!$zip->addFile($dirname . 'cant_find_me.txt', 'test.php')) {
  	echo "failed\n";
  }
  if ($zip->status == ZIPARCHIVE::ER_OK) {
  	dump_entries_name($zip);
  	$zip->close();
  } else {
  	echo "failed\n";
  }
  @unlink($file);
}
