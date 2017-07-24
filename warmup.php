<?php

// fwrite(STDOUT,"give me a string and ill capitalize the first number!\n");

// $testArray = trim(fgets(STDIN));

// function capitalize($testArray){
// 	return ucfirst($testArray);
// };

// $response = capitalize($testArray);
// echo "$response\n";

fwrite(STDOUT,"Whats your first name?\n");
$first = trim(fgets(STDIN));
fwrite(STDOUT,"Whats your last name?\n");
$last = trim(fgets(STDIN));

function greetings($first,$last){
	if (!is_string($first) || !is_string($last)){
		return "one of those names is not a string!\n";
	} else {
		return "Hello $first $last!\n";
	}
}

echo greetings($first,$last);


