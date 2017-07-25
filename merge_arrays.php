<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function nameInArray($name,$array){
	
	if (array_search("$name", $array) === false){
		return false;
	} else {
		return true;
	}
}

if(nameInArray('Tina',$names)){
	echo "Tina is in the array\n";
} else {
	echo "Tina aint in the array\n";
}

if(nameInArray('Bob',$names)){
	echo "Bob is in the array\n";
} else {
	echo "Bob aint in the array\n";
}

// function arrayCommons($array1,$array2){
// 	$nameCount = count(array_intersect($array1,$array2));
// 	return $nameCount;
// }

// echo arrayCommons($names,$compare) . PHP_EOL;

function arrayCommons($array1,$array2){
	$nameCount = 0;
	foreach($array1 as $value){
		if (nameInArray($value,$array2)){
			$nameCount++;
		};
	}
	return $nameCount;
}

echo "The number of value sharde between names and compare is " . arrayCommons($names,$compare) . PHP_EOL;



function combineArrays($array1, $array2){
	$newArray = [];
	foreach($array1 as $key => $value){
		if(nameInArray($value, $array2)){
			array_push($newArray, $array1[$key]);
		} else {
			array_push($newArray, $array1[$key], $array2[$key]);
		}
	}
	return $newArray;
}

$newArray = combineArrays($names,$compare);

echo "The new array is " . PHP_EOL; 
print_r($newArray) . PHP_EOL;
echo "!!!!\n";

// JUSTIS WAY OF SOLVING

// function combineArrays($array1, $array2){
// 	$newArray = [];
// 	foreach($array1 as $key => $value){
// 		$array1Val = array_shift($array1);
// 		$array2Val = array_shift($array2);

// 		if($arrayVal1 === $arrayVal2){
// 			array_push($newArray, $array1[$key]);
// 		} else {
// 			array_push($newArray, $array1[$key], $array2[$key]);
// 		}
// 	}
// 	return $newArray;
// }





