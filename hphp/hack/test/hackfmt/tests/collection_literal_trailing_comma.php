<?hh

$vec = Vector {$foo};
$vec = Vector {$foo,};
$vec = Vector {$foo, $bar};
$vec = Vector {$foo, $bar,};

$vec = Vector {$foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo};
$vec = Vector {$foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo,};
$vec = Vector {$fooooooooooooooooooooooooooooo, $baaaaaaaaaaaaaaaaaaaaaaaaaaaar};
$vec = Vector {$fooooooooooooooooooooooooooooo, $baaaaaaaaaaaaaaaaaaaaaaaaaaaar,};

$vec = Vector {$foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo};
$vec = Vector {$foooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo,};
$vec = Vector {$fooooooooooooooooooooooooooooooooooo, $baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaar};
$vec = Vector {$fooooooooooooooooooooooooooooooooooo, $baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaar,};

$vec = Vector {$foo /* foo */};
$vec = Vector {$foo, /* foo */};

$vec = Vector {
  $foo // foo
};
$vec = Vector {
  $foo, // foo
};
$vec = Vector {
  $foo // foo
  ,
};

$vec = Vector {/* leading comment */ $fooooooooooooooooo /* trailing comment */};
$vec = Vector {/* leading comment */ $fooooooooooooooooo, /* trailing comment */};

$vec = Vector {
  /* leading comment */
  $foooooooooooooooo
  /* trailing comment */
};
$vec = Vector {
  /* leading comment */
  $foooooooooooooooo,
  /* trailing comment */
};
$vec = Vector {
  /* leading comment */
  $foooooooooooooooo
  /* trailing comment */
  ,
};
