<?php

// This recursive function can be used for counting factorial from some number
function f($x) {
// If variable $x doesn't equal "0" it's multiplied on the function f with argument $x-1. This behavior of calling function inside of the
// same function repeats until variable $x equals "0". Then the function f returns "1" and all members of expression are multiplied and 
// the result is returned
	try {
		if ($x < 0) throw new Exception('Error! Invalid argument! You have used a negative number!');
		if ($x === 0) return 1;
		else return $x * f($x-1);
	} catch(Exception $e) {
		echo $e->getMessage();
	}
}
// For example we can count factorial from number 7
echo f(7);

?>
