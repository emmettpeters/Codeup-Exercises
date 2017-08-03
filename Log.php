<?php

class Log
{
	public $filename;

	public function logMessage($logLevel,$message){
		$message = date("h:i:s ") . "[$logLevel]". $message . PHP_EOL;
		append($this->filename, $message);
	}

	public function info($message){
		$this->logMessage("INFO",$message);
	}

	public function error($message){
		$this->logMessage("ERROR",$message);
	}
}