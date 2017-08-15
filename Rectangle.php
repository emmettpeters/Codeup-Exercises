<?php
class Rectangle
{
	public $height;
	public $width;

	public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    public function area(){
    	return (int)($this->height * $this->width);
    }

} 