<?php
$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner and Tony Stark';

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}\n";




function humanizeList($string) {
    $physArray = explode(", ",$string,5);
    return $physArray;
 }

 $physArray = humanizeList($famousFakePhysicists);

 print_r($physArray) . PHP_EOL;

 $last = array_pop($physArray);

 echo $last . PHP_EOL;

  $lastArr = explode(" and ", $last);

  print_r($lastArr) . PHP_EOL;

  array_push($physArray,$lastArr[0],$lastArr[1]);

  print_r($physArray) . PHP_EOL;

  asort($physArray);

  print_r($physArray);

// $ffff = (humanizedList($physicistsString));
// $order = arsort($ffff);

// echo "Some of the most famous fictional theoretical physicists are\n";

// print_r($order) . PHP_EOL;

