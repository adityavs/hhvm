<?hh



<<__EntryPoint>>
function main_881() {
$i = 0;
 print ++$i;
 print "\t";
 print (varray['a']===true) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===true) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === true	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === false	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === 1	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === 0	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === -1	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']==='1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ==='1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']==='0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ==='0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']==='-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ==='-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===null) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===null) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = null;
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === null	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===__hhvm_intrinsics\dummy_cast_to_kindofarray(vec[])) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===__hhvm_intrinsics\dummy_cast_to_kindofarray(vec[])) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = __hhvm_intrinsics\dummy_cast_to_kindofarray(vec[]);
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array()	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===varray[1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===varray[1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[1];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===varray[2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===varray[2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[2];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===varray['1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===varray['1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['1'];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===darray['0' => '1']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===darray['0' => '1']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['0' => '1'];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===varray['a']) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===varray['a']) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray['a'];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===darray['a' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===darray['a' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===darray['b' => 1]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===darray['b' => 1]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['b' => 1];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===darray['a' => 1, 'b' => 2]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = darray['a' => 1, 'b' => 2];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===varray[darray['a' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===varray[darray['a' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['a' => 1]];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']===varray[darray['b' => 1]]) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ===varray[darray['b' => 1]]) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = varray[darray['b' => 1]];
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']==='php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ==='php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print (varray['a']==='') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = varray['a'];
 print ($a ==='') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print (varray['a']===$b) ? 'Y' : 'N';
 print ($a ===$b) ? 'Y' : 'N';
 print "\t";
 print "array('a') === ''	";
 print "\n";
}
