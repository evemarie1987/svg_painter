<?php 
/**
* 
*/
abstract class Shape
{
	protected $color;
	protected $localisation;
	protected $opacity;

	public function __construct($color = '#ff00ff', $opacity = 0.5, $x=300,$y=200) {
		$this->setColor($color);
		$this->setLocalisation($x,$y);
		$this->setOpacity($opacity);
	}

	public function setColor($color) {
		$this->color = new Color($color);
	}
	public function setLocalisation($x,$y) {
		$this->localisation = new Point($x,$y);
	}
	public function setOpacity($opacity) {
		if(is_numeric($opacity) && ($opacity>=0) && ($opacity <= 1)){
			$this->opacity = $opacity;
		}
	}


	public function getX() {
		return $this->localisation->getX();
	}
	public function getY() {
		return $this->localisation->getY();
	}
	public function getOpacity() {
		return $this->opacity;
	}
	public function getColor() {
		return $this->color->getColor();
	}

	abstract function draw();
}
