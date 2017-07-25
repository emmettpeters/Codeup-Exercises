<?php

$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner and Tony Stark';

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}\n";

function humanizeList($string,$bool) {
	if ($bool === true){

	    $physArray = explode(", ",$string,5);
	    asort($physArray);
	    return $physArray;
	}
}

$physArray = humanizeList($famousFakePhysicists,true);

print_r($physArray) . PHP_EOL;

$last = array_shift($physArray);

echo $last . PHP_EOL;

$lastArr = explode(" and ", $last);

print_r($lastArr) . PHP_EOL;

array_push($physArray,$lastArr[0],$lastArr[1]);

print_r($physArray) . PHP_EOL;

asort($physArray);

print_r($physArray);

function arrayToString($arr){
	$newString = implode(",",$arr);
	return $newString;
}

$newString = arrayToString($physArray);

echo $newString;



