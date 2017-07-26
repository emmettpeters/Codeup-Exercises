<?php

// $filename = "log" . date("Y") . date("m") . date("d") . ".log";

function append($filename,$stringToWrite)
{
	$handle = fopen($filename, "a");
	fwrite($handle,$stringToWrite);
	fclose($handle);
}



function logMessage($logLevel, $message)
{	
	$filedate = "log-" . date("Y-m-d") . ".log";
	$message = date("h:i:s ") . "[$logLevel] ". $message . PHP_EOL;
	append($filedate, $message);
};

function logError($message)
{	
	logMessage("ERROR", $message);
};

function logInfo($message)
{	
	logMessage("INFO", $message);
};


logInfo("This is an info message.");
logError("This is an error message.");

