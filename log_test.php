<?php

require_once "Log.php";
// require_once "functions.php";
require_once "library.php";


	$log = new Log();
	$log->filename="log-" . date("Y-m-d") . ".log";
	
	$log->info("hello dood");
	$log->error("omg an error");



?>
