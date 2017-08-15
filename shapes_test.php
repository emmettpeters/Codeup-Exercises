<?php
require_once "Rectangle.php";
require_once "Square.php";

$newTangle = new Rectangle(10,5);

var_dump($newTangle->area());

$newSquare = new Square(2,3);

var_dump($newSquare->perimeter());
var_dump($newSquare->area());

