<?php

$a=15;
$b=22;

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
    	return $a + $b;
    } else{
    	return "I need numbers dood!/n";
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
    	return $a - $b;
    } else{
    	return "I need numbers dood!/n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
    	return $a * $b;
    } else{
    	return "I need numbers dood!/n";
    }
}

function divide($a, $b){
	if ($b != 0){
	    if (is_numeric($a) && is_numeric($b)){
	    	return $a / $b;
	    } else {
	    	return "I need numbers dood!/n";
	    }
	} else {
		echo "cant divide by 0 FOOL!\n";
	}
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
    	return $a % $b;
    } else{
    	return "I need numbers dood!/n";
    }
}

$adding = add(3,6);
echo "$adding\n";
$subtracting = subtract(4,2);
echo "$subtracting\n";
$multiplying = multiply(4,2);
echo "$multiplying\n";
$divideing = divide(4,0);
echo "$divideing\n";
$modulusing = modulus(4,2);
echo "$modulusing\n";



// Add code to test your functions here
