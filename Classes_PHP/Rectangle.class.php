<?php 
/**
* 
*/
class Rectangle extends Shape
{
	protected $width;
	protected $height;

	const DIM1 = 'Largeur';
	const DIM2 = 'Hauteur';
	const LOC = 'Coin haut gauche';
	const NAME = 'Rectangle';

	public function __construct($color = '#ff00ff', $opacity = 0.5, $x = 300, $y = 200, $width =150,$height=100) {
		parent::__construct($color, $opacity, $x, $y);
		$this->setSize($width,$height);
	}

	public function setSize($w,$h) {
		if ((int)$w>=0 && (int)$h>=0) {
			$this->width = (int)$w;
			$this->height = (int)$h;
		}
	}

	public function getWidth() {
		return $this->getDim1();
	}
	public function getHeight() {
		return $this->getDim2();
	}

	public function getDim1() {
		return $this->width;
	}
	public function getDim2() {
		return $this->height;
	}

	public function draw() {
		echo '<rect x="'.$this->getX().'" y="'.$this->getY().'" width="'.$this->getWidth().'" height="'.$this->getHeight().'" fill="'.$this->getColor().'" opacity="'.$this->opacity.'" />';
	}
}