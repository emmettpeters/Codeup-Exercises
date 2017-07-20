<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing){
	if (is_int($thing)){
		echo $thing . PHP_EOL;
		echo "Integer!\n";
	}
	if (is_array($thing)){
		print_r($thing);
		echo "Array!\n";
	} 
	if (is_bool($thing)){
		echo $thing . PHP_EOL;
		echo "Boolean!\n";
	} 
	if (is_string($thing)){
		echo $thing . PHP_EOL;
		echo "String!\n";
	} 


	if (is_null($thing)){
		echo $thing . PHP_EOL;
		echo "Null!\n";
	} 
	if (is_double($thing)){
		echo $thing . PHP_EOL;
		echo "Float!\n";
	} 
}
