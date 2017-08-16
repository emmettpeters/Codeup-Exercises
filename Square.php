<?php

require_once "Rectangle.php";

class Square extends Rectangle
{
	public function __construct($height){
		$width = $height;
		parent::__construct($height,$width);
	}

	public function perimeter(){
		return $this->getHeight() * 4;
	}

	public function area(){
    	return $this->getHeight() * 2;
    }
}
