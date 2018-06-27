<?php 
/**
* 
*/
class Circle extends Ellipse
{
	const DIM1 = 'Rayon';
	const NAME = "Cercle";

	public function setRadius($rx, $ry=0) {
		parent::setRadius($rx, $rx);
	}
}