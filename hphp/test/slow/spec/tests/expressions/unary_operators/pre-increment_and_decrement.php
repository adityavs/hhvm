<?hh

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2015 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

// decrements twice before incrementing
function incdec($a)
{
    echo "--------------------------------------- start incdec ---\n";
    $b = $a;
    echo '$a = '.$a." <---> "; var_dump($a);
//  echo '$b = '.$b." <---> "; var_dump($b);

    --$a;
    echo '$a = '.$a." <---> "; var_dump($a);
    $b -= 1;
//  echo '$b = '.$b." <---> "; var_dump($b);

    --$a;
    echo '$a = '.$a." <---> "; var_dump($a);
    $b -= 1;
//  echo '$b = '.$b." <---> "; var_dump($b);

    ++$a;
    echo '$a = '.$a." <---> "; var_dump($a);
    $b += 1;
//  echo '$b = '.$b." <---> "; var_dump($b);

    echo '$a = '.++$a."\n";
    echo '$a = '.$a." <---> "; var_dump($a);
    echo "--------------------------------------- end incdec ---\n";
}

// increments twice before decrementing
function incdecrev($a)
{
    echo "--------------------------------------- start incdecrev ---\n";
    $b = $a;
    echo '$a = '.$a." <---> "; var_dump($a);
//  echo '$b = '.$b." <---> "; var_dump($b);

    ++$a;
    echo '$a = '.$a." <---> "; var_dump($a);
    $b += 1;
//  echo '$b = '.$b." <---> "; var_dump($b);

    ++$a;
    echo '$a = '.$a." <---> "; var_dump($a);
    $b += 1;
//  echo '$b = '.$b." <---> "; var_dump($b);

    --$a;
    echo '$a = '.$a." <---> "; var_dump($a);
    $b -= 1;
//  echo '$b = '.$b." <---> "; var_dump($b);

    echo '$a = '.++$a."\n";
    echo '$a = '.$a." <---> "; var_dump($a);
    echo "--------------------------------------- end incdecrev ---\n";
}
<<__EntryPoint>> function main(): void {
error_reporting(-1);

///*
// integer values ----------------------------------------------------

incdec(5);
incdecrev(5);
incdec(-10);
incdecrev(-10);

// floating-point values ----------------------------------------------------

incdec(12.345);
incdecrev(12.345);
//*/

///*
// special IEEE floating-point values ----------------------------------------------------

incdec(INF);
incdecrev(INF);
incdec(-INF);
incdecrev(-INF);
incdec(NAN);
incdecrev(NAN);
//*/

///*
// NULL value ----------------------------------------------------

incdec(NULL);
incdecrev(NULL);
//*/

///*
// Boolean values ----------------------------------------------------

incdec(TRUE);
incdecrev(FALSE);
//*/

///*
// string values ----------------------------------------------------
// an empty string

incdec("");
incdecrev("");
//*/

// strings containing numbers
///*
// whole-numbers

incdec("0");
incdecrev("0");
incdec("9");
incdecrev("9");
incdec("26");
incdecrev("26");
incdec("98325");
incdecrev("98325");
incdec("9223372036854775807");
incdecrev("9223372036854775807");
//*/

///*
// test if number bases other than decimal are supported

incdec("012");
incdecrev("012");
incdec("0x12");
incdecrev("0x12");
incdec("0X12");
incdecrev("0X12");
//*/

///*
// fractional values

incdec("123.456");
incdecrev("123.456");
incdec("1.23E-27");
incdecrev("1.23E-27");
//*/

///*
// IEEE special values

//*/

///*
// leading and trailing whitespace

incdec(" 43");
incdecrev(" 43");
incdec("   654");
incdecrev("   654");
incdec("\t \n\f\r\v94");
incdecrev("\t \n\f\r\v94");
//*/

///*
// strings with leading zeros

incdec("012");
incdecrev("012");
incdec("   000012345");
incdecrev("   000012345");
incdec("00012.345");
incdecrev("00012.345");
incdec("  00012.345");
incdecrev("  00012.345");
//*/

///*
// leading sign

incdec("-12345");
incdecrev("-12345");
incdec("+9.87");
incdecrev("+9.87");
//*/
}
