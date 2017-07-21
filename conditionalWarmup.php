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


//extra

$result = 63;
$array = ["skeleton",45.18,[1,3,4,6],{value:-210}, false,"88.22222222"];

foreach ($array as $elem){
	if (is_string($elem)){
		 echo $elem . "is a string bruh";
	}

	if (!is_string($elem)){
		$elem . "is Not string bruh";
	}


}
