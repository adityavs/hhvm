<?hh

class X extends CLOSURE {
  public function __construct() {}
  public static function __invoke() { return 42; }
}

<<__EntryPoint>>
function main_ctor() {
$x = new X();
echo $x();
}
