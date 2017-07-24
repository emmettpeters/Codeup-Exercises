<?php

// // TODO: Create your inspect() function here
function inspect($var){
	$message = "";
	if(is_int($var)){
		$message = "the integer is $var";
	} else if (is_double($var)){
		$message = "the double is $var";
	} else if (is_array($var)){
		if (empty($var)){
			$message = "The array is empty";
		} else {
			$message = "The array is not empty";
		}
	} else if (is_string($var)){
		if (empty($var)){
			$message = "The string is empty";
		} else {
			$message = "The string is $var";
		}
	} else if (is_bool($var)){
		if ($var)){
			$message = "The bool is true";
		} else {
			$message = "The bool is false";
		}
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
	 echo inspect($num1);
echo 'Inspecting $num2:' . PHP_EOL;
	echo inspect($num2);
echo 'Inspecting $num3:' . PHP_EOL;
	echo inspect($num3);
echo 'Inspecting $num4:' . PHP_EOL;
	echo inspect($num4);
echo 'Inspecting $null:' . PHP_EOL;
	echo inspect($null);
echo 'Inspecting $bool1' . PHP_EOL;
	echo inspect($bool1);
echo 'Inspecting $bool2' . PHP_EOL;
	echo inspect($bool2);
echo 'Inspecting $string1' . PHP_EOL;
	echo inspect($string1);
echo 'Inspecting $string2' . PHP_EOL;
	echo inspect($string2);
echo 'Inspecting $array1' . PHP_EOL;
	echo inspect($array1);
echo 'Inspecting $array2' . PHP_EOL;
	echo inspect($array2);

//BONUS 
$string="aabb131";

function occurences($string){
	$as = substr_count($string, "a");
	$bs = substr_count($string, "b");
	$ones = substr_count($string, "1");
	$threes = substr_count($string, "3");

	return ("There are $as as in the string\n
	 There are $bs bs in the string\n
	 There are $ones 1s in the string\n
	 There are $threes 3s in the string\n");
}

echo occurences($string);








