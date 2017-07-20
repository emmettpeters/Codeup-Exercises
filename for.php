<?php

fwrite(STDOUT,"I need a minimum number to iterate from.\n");

$userLow = trim(fgets(STDIN));

fwrite(STDOUT,"I need a maximum number to iterate to.\n");

$userHigh = trim(fgets(STDIN));

fwrite(STDOUT,"I need a number to iterate by\n");

$userIter = trim(fgets(STDIN));

if (!is_numeric($userLow) || !is_numeric($userHigh) || !is_numeric($userIter)){
	echo "Inputs are not correct!!";
	die;
}

if ($userIter == ""){
	$userIter = 1;
}

for ($i = $userLow; $i <= $userHigh; $i += $userIter ){
	echo "$i\n";
}
