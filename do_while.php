<?php

$number = 0;

do {
    echo "$number \n";
    $number += 2;
} while ($number < 100);

do {
    echo "$number \n";
    $number -= 5;
} while ($number >= -10);

$number2 = 2;

do {
    echo "$number2 \n";
    $number2 = $number2 * $number2;
} while ($number2 < 1000000);