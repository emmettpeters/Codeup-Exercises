<?php

fwrite(STDOUT,"I need a minimum number to iterate from.\n");

$userLow = trim(fgets(STDIN));

fwrite(STDOUT,"I need a maximum number to iterate to.\n");

$userHigh = trim(fgets(STDIN));

fwrite(STDOUT,"I need a number to iterate by\n");

$userIter = trim(fgets(STDIN));

for ($userIter = $userLow; $userIter <= $userHigh; $userIter +=1 ){
	echo "$i\n";
}
