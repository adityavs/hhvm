<?hh

class Whatever {
  protected $blah;

  public function __get($name) { var_dump($name); }
}

<<__EntryPoint>> function main(): void {
  $l = new Whatever();
  $l->blah++;
  var_dump($l);
}
