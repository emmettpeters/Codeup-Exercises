	<?php

	function append($filename,$stringToWrite)
	{
		$handle = fopen($filename, "a");
		fwrite($handle,$stringToWrite);
		fclose($handle);
	}



	function logMessage($logLevel, $message)
	{	
		$filedate = "log-" . date("Y-m-d") . ".log";
		append($this->filename, $message);
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

