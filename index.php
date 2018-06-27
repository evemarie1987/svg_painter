<?php 
require 'Classes_PHP/Point.class.php';
require 'Classes_PHP/Color.class.php';

require 'Classes_PHP/Shape.class.php';
require 'Classes_PHP/Triangle.class.php';
require 'Classes_PHP/Rectangle.class.php';
require 'Classes_PHP/Square.class.php';
require 'Classes_PHP/Ellipse.class.php';
require 'Classes_PHP/Circle.class.php';

require 'Classes_PHP/SVG.class.php';


$result = false;

$shapes = [];
if(!empty($_POST))
{
	$svg = new SVG();

	$shape_count = count($_POST['type']);
	$types = $_POST['type'];

	for ($i=0; $i < $shape_count; $i++) { 

		switch ($_POST['type'][$i]) {
			case SVG::RECTANGLE:
				$shape = new Rectangle($_POST['color'][$i], $_POST['opacity'][$i], $_POST['x0'][$i], $_POST['y0'][$i], $_POST['dim1'][$i], $_POST['dim2'][$i]);
				break;
			case SVG::SQUARE:
				$shape = new Square($_POST['color'][$i], $_POST['opacity'][$i], $_POST['x0'][$i], $_POST['y0'][$i], $_POST['dim1'][$i]);
				break;
			case SVG::ELLIPSE:
				$shape = new Ellipse($_POST['color'][$i], $_POST['opacity'][$i], $_POST['x0'][$i], $_POST['y0'][$i], $_POST['dim1'][$i], $_POST['dim2'][$i]);
				break;
			case SVG::CIRCLE:
				$shape = new Circle($_POST['color'][$i], $_POST['opacity'][$i], $_POST['x0'][$i], $_POST['y0'][$i], $_POST['dim1'][$i]);
				break;
			case SVG::TRIANGLE:
				$shape = new Triangle(
					$_POST['color'][$i], 
					$_POST['opacity'][$i], 
					$_POST['x0'][$i], 
					$_POST['y0'][$i], 
					$_POST['x1'][$i], 
					$_POST['y1'][$i], 
					$_POST['x2'][$i], 
					$_POST['y2'][$i]);
				break;
		}
		$svg->add_shape($shape);
	}
	

	$shapes = $svg -> getShapes();
	$result = true;
}

if(empty($shapes))
{
	array_push($shapes, new Rectangle());
	$types[0] = 1;
}

include 'index.phtml';