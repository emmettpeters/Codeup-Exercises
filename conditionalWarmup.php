<?php

$result = 0;
$testArray = [2,1,-3,"bob"];

foreach ($testArray as $testElem) {

	if (is_numeric($testElem)){
		if ($testElem %2 == 0){
			echo "$testElem is Even Number Multiplying\n";
			$result *= abs($testElem);
			echo "result is now $result\n";

		} else if ($testElem % 2 != 0){
			echo "$testElem is Odd Number Adding\n";
			$result += abs($testElem);
			echo "result is now $result\n";
		} 
	} else {
		echo "NaN\n";
	}

}