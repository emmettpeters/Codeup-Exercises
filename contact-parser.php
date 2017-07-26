<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts

    $filename = $filename;
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsArray = explode("\n", $contents);
	// print_r($contentsArray);
	foreach($contentsArray as $key => $contact){

		$contactArray = explode("|",$contact);
		$number = $contactArray[1];
		$newNumber = substr($number,0,3) . "-" .substr($number,3,3) . "-" . substr($number,6,4);
		$newArray = ["name" => $contactArray[0], "number" => $newNumber];
		array_push($contacts,$newArray);
				
	};



	fclose($handle);

   	return $contacts;
}

var_dump(parseContacts('names.txt'));
