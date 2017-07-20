<?php

for ($i = 0; $i <= 100; $i+=1){
	if ($i % 3 == 0 && !($i % 5 == 0)) {
		echo "Fizz\n";
	}

	if ($i % 5 == 0 && !($i % 3 == 0)) {
		echo "Buzz\n";
	}

	if ($i % 15 == 0) {
		echo "FizzBuzz\n";
	}

	if (!($i % 3 == 0) && !($i % 5 == 0)) {
		echo "$i\n";
	}
}