<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function nameInArray($name,$array){
	
	if (array_search("$name", $array) === false){
		return "FALSE";
	} else {
		return "TRUE";
	}
}
echo nameInArray('Tina',$names) . PHP_EOL;

function arrayCommons($array1,$array2){
	$nameCount = count(array_intersect($array1,$array2));
	return $nameCount;
}

echo arrayCommons($names,$compare) . PHP_EOL;