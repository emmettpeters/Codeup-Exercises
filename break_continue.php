<?php

for ($i=0;$i<=100;$i+=1){
	if($i%2==0){
		continue;
	}
	echo $i."\n";
}

for ($i=0;$i<=100;$i+=1){
	if($i > 10){
		break;
	}
	echo $i."\n";
}