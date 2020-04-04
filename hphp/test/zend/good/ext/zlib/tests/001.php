<?hh /* $Id$ */
<<__EntryPoint>>
function main_entry(): void {
  $original = str_repeat("hallo php",4096);
  $packed=gzdeflate($original);
  echo strlen($packed)." ".strlen($original)."\n";
  $unpacked=gzinflate($packed);
  if (strcmp($original,$unpacked)==0) echo "Strings are equal\n";

  /* with explicit compression level, length */
  $original = str_repeat("hallo php",4096);
  $packed=gzdeflate($original, 9);
  echo strlen($packed)." ".strlen($original)."\n";
  $unpacked=gzinflate($packed, 40000);
  if (strcmp($original,$unpacked)==0) echo "Strings are equal\n";

  $original = 'aaaaaaaaaaaaaaa';
  $packed=gzdeflate($original);
  echo strlen($packed)." ".strlen($original)."\n";
  $unpacked=gzinflate($packed);
  if (strcmp($original,$unpacked)==0) echo "Strings are equal";
}
