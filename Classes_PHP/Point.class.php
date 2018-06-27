<?php 
/**
* 
*/
class Point
{	
	protected $x = 0;
	protected $y = 0;
	
	public function __construct($x,$y)
	{
		$this->setCoordinates($x,$y);
	}

	public function setCoordinates($x, $y) {
		$this->x = (int)$x;
		$this->y = (int)$y;
	}

	public function getX() {
		return $this->x;
	}
	public function getY() {
		return $this->y;
	}
}

