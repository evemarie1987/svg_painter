<?php   

/**
* 
*/
class SVG
{
	protected $shapes = [];

	const RECTANGLE = 1;
	const SQUARE = 2;
	const CIRCLE = 3;
	const ELLIPSE = 4;
	const TRIANGLE = 5;

	const WIDTH = 900;
	const HEIGHT = 600;
	
	protected static $maxSize = 200;
	protected static $minShapes = 5;
	protected static $maxShapes = 20;

	public function getShapes()  {return $this->shapes;}

	public function generate_random_shapes() {
		$this->shapes = [];
		$shapesCount=random_int(self::$minShapes, self::$maxShapes);
		for ($i=0; $i <= $shapesCount; $i++) { 
			$this->random_shape();
		}
	}

	public function run() {
		foreach ($this->shapes as $shape) {
			$shape->draw();
		}
	}

	public function add_shape($shape) {
		array_push($this->shapes, $shape);
	}
	
	public function random_shape() {
		$shape_type = random_int(1, 5);
		$color = 'rgb('.random_int(0, 255).','.random_int(0, 255).','.random_int(0, 255).')';
		$opacity = random_int(1, 100) / 100;
		$x0 = $this->random_x();
		$y0 = $this->random_y();
		$dim1 = $this->random_dimension();
		$dim2 = $this->random_dimension();
		$x1 = $this->random_x();
		$y1 = $this->random_y();
		$x2 = $this->random_x();
		$y2 = $this->random_y();
		switch ($shape_type) {
			case self::RECTANGLE:
				$shape = new Rectangle($color, $opacity, $x0, $y0, $dim1,$dim2);
				break;
			case self::SQUARE:
				$shape = new Square($color, $opacity, $x0, $y0, $dim1);
				break;
			case self::CIRCLE:
				$shape = new Circle($color, $opacity, $x0, $y0, $dim1);
				break;
			case self::ELLIPSE:
				$shape = new Ellipse($color, $opacity, $x0, $y0, $dim1, $dim2);
				break;
			case self::TRIANGLE:
				$shape = new Triangle($color, $opacity, $x0, $y0, $x1, $y1, $x2, $y2);
				break;
			default:
				break;
		}
		$this->add_shape($shape);
		
	}

	private function random_x() {
		return random_int(0, self::WIDTH);
	}
	private function random_y() {
		return random_int(0, self::HEIGHT);
	}
	private function random_dimension() {
		return random_int(1, self::$maxSize);
	}

}