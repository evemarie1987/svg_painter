<?php 
/**
* 
*/
class Ellipse extends Shape
{
	protected $rx;
	protected $ry;

	const DIM1 = 'Rayon hor.';
	const DIM2 = 'Rayon vert.';
	const LOC = 'Centre';
	const NAME = 'Ellipse';

	public function __construct($color = '#ff00ff', $opacity = 0.5, $x = 300, $y = 200,$rx = 150, $ry=100) {
		parent::__construct($color, $opacity, $x, $y);
		$this->setRadius($rx,$ry);
	}

	public function setRadius($rx,$ry) {
		$rx=(int)$rx;
		$ry=(int)$ry;
		if (($rx>=0) && ($ry>=0)) {
			$this->rx =$rx;
			$this->ry =$ry;
		}
	}

	public function getDim1() {
		return $this->rx;
	}
	public function getDim2() {
		return $this->ry;
	}
	public function getRadius() {
		return ['rx'=> $this->rx,'ry'=> $this->ry];
	}

	public function draw() {
		echo '<ellipse cx="'.$this->getX().'" cy="'.$this->getY().'" rx="'.$this->rx.'" ry="'.$this->ry.'" fill="'.$this->getColor().'" opacity="'.$this->opacity.'" />';
	}
}