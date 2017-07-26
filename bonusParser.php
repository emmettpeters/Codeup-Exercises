<?php

function fileReader($filename){
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);
	return $contents;
}

$myFile = fileReader('bonus.txt');

function bonusParse($file){
	$contArr = explode("\n",$file);
	$peopleArr = [];
	$stateAbrev= ["AL,AK,AZ,AR,CA,CO,CT,DE,FL,GA,HI,ID,IL,IN,IA,KS,KY,LA,ME,MD,MA,MI,MN,MS,MO,MT,NE,NV,NH,NJ,NM,NY,NC,ND,OH	,OK,OR,PA,RI,SC,SD,TN,TX,UT,VT,VA,WA,WV,WI,WY"];
	$stateNames =["Alabama,Alaska,Arizona,Arkansas,California,Colorado,Connecticut,Delaware,Florida,Georgia,Hawaii,Idaho,Illinois,Indiana,Iowa,Kansas,Kentucky,Louisiana,Maine,Maryland,Massachusetts,Michigan,Minnesota,Mississippi,Missouri,Montana,Nebraska,Nevada,New Hampshire,New Jersey,New Mexico,New York,North Carolina,North Dakota,Ohio,Oklahoma,Oregon,Pennsylvania,Rhode Island,South Carolina,South Dakota,Tennessee,Texas,Utah,Vermont,Virginia,Washington,West Virginia,Wisconsin,Wyoming"];

	foreach($contArr as $person){
		$personArr = explode("/",$person);
		$capBool = array_pop($personArr);
		echo $personArr[2];
		if ($capBool === "true"){
			$personArr[0] = strtoupper($personArr[0]);
		}

		array_push($peopleArr ,$personArr);
	}
	return $peopleArr;
}

print_r(bonusParse($myFile));


   // 5) Create another function to parse the contents of the bonus file called bonusParse():

   //  bonusParse() should take in a string of content and return an array of information for each "person" in the bonus file. Each person's information should be contained in an array with the first element being their name, second element being there age, third element being the states they have resided in (the states should be spelled out entirely, not abbreviated, and should be title cased), and finally the last element should be removed and used to determine if the name of the person in the first element will be in all CAPS (true) or all lowercase (false).

   //  To convert to the full state name from the abbreviation, use the link in the Slack channel for copy-friendly state names.