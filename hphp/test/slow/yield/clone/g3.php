<?hh

class Ref {
  function __construct(public $value) {}
}
<<__EntryPoint>>
function main_g3() {
$foo = function ($a1, $a2) {
  $a1 += 10;
  $a2->value += 100;
  yield $a1 * 10000 + $a2->value;
  $a1 += 20;
  $a2->value += 200;
  yield $a1 * 10000 + $a2->value;
  $a1 += 30;
  $a2->value += 300;
  yield $a1 * 10000 + $a2->value;
};
$a1 = 1;
$a2 = new Ref(-999999999);
$x = $foo($a1, $a2);
$y1 = clone $x;
$y2 = clone $x;
$a2->value = 2;
foreach ($y1 as $v) {
  $v1 = (int)($v / 10000);
  $v2 = $v % 10000;
  echo $v1 . " " . $v2 . "\n";
  ++$a2->value;
}
echo "--------\n";
var_dump($a1, $a2->value);
echo "========\n";
foreach ($y2 as $v) {
  $v1 = (int)($v / 10000);
  $v2 = $v % 10000;
  echo $v1 . " " . $v2 . "\n";
  ++$a2->value;
}
echo "--------\n";
var_dump($a1, $a2->value);
echo "========\n";
foreach ($x as $v) {
  $v1 = (int)($v / 10000);
  $v2 = $v % 10000;
  echo $v1 . " " . $v2 . "\n";
  ++$a2->value;
}
echo "--------\n";
var_dump($a1, $a2->value);
}
