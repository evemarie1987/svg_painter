<?php 
include 'Classes_PHP/SVG.class.php'; 
include 'Classes_PHP/Point.class.php'; 
include 'Classes_PHP/Color.class.php'; 
include 'Classes_PHP/Shape.class.php'; 
include 'Classes_PHP/Ellipse.class.php'; 
include 'Classes_PHP/Rectangle.class.php'; 
include 'Classes_PHP/Square.class.php'; 
include 'Classes_PHP/Circle.class.php'; 
include 'Classes_PHP/Triangle.class.php'; 

switch ($_POST['type']) {
	case 'rectangle':
		$shape = new Rectangle();
		$type = SVG::RECTANGLE;
		break;
	case 'square':
		$shape = new Square();
		$type = SVG::SQUARE;
		break;
	case 'ellipse':
		$shape = new Ellipse();
		$type = SVG::ELLIPSE;
		break;
	case 'circle':
		$shape = new Circle();
		$type = SVG::CIRCLE;
		break;
	case 'triangle':
		$shape = new Triangle();
		$type = SVG::TRIANGLE;
		break;
}

include 'fieldset.phtml';