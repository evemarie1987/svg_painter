<?php 
/**
* 
*/
class Triangle extends Shape
{
	protected $ptA;
	protected $ptB;
	protected $ptC;

	const LOC = 'Point A';
	const NAME = 'Triangle';

	public function __construct($color = '#ff00ff', $opacity = 0.5, $x0 = 300, $y0 = 200, $x1 = 300,$y1 = 300, $x2 = 600, $y2 = 300) {
		parent::__construct($color, $opacity);
		$this->setCoordinates($x0, $y0, $x1,$y1, $x2, $y2);
	}

	public function setCoordinates($x0, $y0, $x1,$y1, $x2, $y2) {
		$this->ptA = new Point($x0, $y0);
		$this->ptB = new Point($x1, $y1);
		$this->ptC = new Point($x2, $y2);
	}

	public function getPtA() {
		return $this->ptA;
	}
	public function getPtB() {
		return $this->ptB;
	}
	public function getPtC() {
		return $this->ptC;
	}

	public function draw() {
		echo '<path d="M '.$this->ptA->getX().','.$this->ptA->getY().' L '.$this->ptB->getX().','.$this->ptB->getY().' L '.$this->ptC->getX().','.$this->ptC->getY(). ' Z" fill="'.$this->getColor().'" opacity="'.$this->opacity.'" />';
	}
}
