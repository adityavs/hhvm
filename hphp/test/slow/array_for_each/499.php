<?hh
function foo($a, $b, $c) {
  var_dump('foo');
  return 1;
}
function bar($a, $b, $c) {
  var_dump('bar');
  return 2;
}
function buz($x,$y) {
 if ($y) return $x;
 return 1;
 }


<<__EntryPoint>>
function main_499() {
$a = varray[1,2,3,4,5];
$s = buz('hello',1);
foreach ($a as $s[3]) {
  var_dump($s);
}
$i = 0;
foreach ($a as          $a[bar($i++, $i++, $i++)] => $a[foo($i++, $i++, $i++)]) {
  var_dump($a[1],$a[2]);
}
}
