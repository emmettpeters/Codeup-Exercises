<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');
echo $dayOfWeek."\n";

switch($dayOfWeek) {
    case 1:
	    echo "Its Monday\n";
	    break;
	case 2:
	    echo "Its Tuesday\n";
	    break;
	case 3:
	    fwrite(STDOUT,"Its Wednesday\n");
	    break;
	case 4:
	    echo "Its Thursday\n";
	    break;
	case 5:
	    fwrite(STDOUT,"Its Friday!\n");
	    break;
	case 6:
	    echo "Its Saturday\n";
	    break;
	case 7:
	    echo "Its Sunday\n";
	    break;
	default:
		echo "Time as we know it has ended!! \n It is no day of the weeeek!!!";
		break;

     
}