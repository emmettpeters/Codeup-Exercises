<?php

$a=15;
$b=22;

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
    	return $a + $b;
    } else{
    	return "I need numbers dood! Either $a or $b is NaN\n";
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
    	return $a - $b;
    } else{
    	return "I need numbers dood! Either $a or $b is NaN\n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
    	return $a * $b;
    } else{
    	return "I need numbers dood! Either $a or $b is NaN\n";
    }
}

function divide($a, $b){
	
	// if ($b != 0){
    if (is_numeric($a) && is_numeric($b)){
    	return $a / $b;
    } else {
    	function error($a,$b){
    		return "I need numbers dood! Either $a or $b is NaN\n";
    	}
    	return error($a,$b);
    }
	
	// else {
	// 	echo "cant divide by 0 FOOL!\n";
	// }
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
    	return $a % $b;
    } else{
    	return "I need numbers dood! Either $a or $b is NaN\n";
    }
}

$adding = add(3,6);
echo "$adding\n";
$subtracting = subtract(4,2);
echo "$subtracting\n";
$multiplying = multiply(4,2);
echo "$multiplying\n";
$divideing = divide(4,"eggplant");
echo "$divideing\n";
$modulusing = modulus(4,2);
echo "$modulusing\n";



// Add code to test your functions here
