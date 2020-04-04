<?hh
/* Prototype  : array array_values(array $input)
 * Description: Return just the values from the input array 
 * Source code: ext/standard/array.c
 */

/*
 * Pass arrays where the keys are different data types as $input argument
 * to array_values() to test behaviour
 */
<<__EntryPoint>> function main(): void {
echo "*** Testing array_values() : usage variations ***\n";

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// heredoc string
$heredoc = <<<EOT
hello world
EOT;

// unexpected values to be passed as $input
$inputs = darray[

       // int data
/*1*/  'int' => darray[
       0 => 'zero',
       1 => 'one',
       12345 => 'positive',
       -2345 => 'negative',
       ],

       // float data
/*2*/  'float' => darray[
       10.5 => 'positive',
       -10.5 => 'negative',
       .5 => 'half',
       ],
       
/*3*/  'extreme floats' => darray[
       12.3456789000e10 => 'large',
       12.3456789000E-10 => 'small',
       ],

       // null data
/*4*/ 'null uppercase' => darray[
       NULL => 'null 1',
       ], 
       
/*5*/  'null lowercase' => darray[
       null => 'null 2',
       ],

       // boolean data
/*6*/ 'bool lowercase' => darray[
       true => 'lowert',
       false => 'lowerf',
       ],
       
/*7*/  'bool uppercase' => darray[
       TRUE => 'uppert',
       FALSE => 'upperf',
       ],
       
       // empty data
/*8*/ 'empty double quotes' => darray[
       "" => 'emptyd',
       ],
       
/*9*/  'empty single quotes' => darray[
       '' => 'emptys',
       ],

       // string data
/*10*/ 'string' => darray[
       "stringd" => 'stringd',
       'strings' => 'strings',
       $heredoc => 'stringh',
       ],

       // undefined data
/*11*/ 'undefined' => darray[
       @$undefined_var => 'undefined',
       ],

       // unset data
/*12*/ 'unset' => darray[
       @$unset_var => 'unset',
       ],
];

// loop through each element of $inputs to check the behavior of array_values()
$iterator = 1;
foreach($inputs as $key => $input) {
  echo "\n-- Iteration $iterator: $key data --\n";
  var_dump( array_values($input) );
  $iterator++;
};
echo "Done";
}
