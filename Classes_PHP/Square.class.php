<?php 
/**
* 
*/
class Square extends Rectangle
{
	const DIM1 = 'Côté';
	const NAME = 'Carré';

	function setSize($w, $h=0) {
		parent::setSize($w, $w);
	}
}