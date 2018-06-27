<?php 
/**
* 
*/
class Color
{
	protected $color = '#000';

	function __construct($color)
	{
		$this->setColor($color);
	}

	public function getColor() {
		return $this->color;
	}

	public function setColor($color) {
		$this->color = $color;
		/*
		on fera ça à coup d'expression régulière plus tard

		//is_color_hex
		if(preg_match('/^#[a-f0-9]{6}$/i', $color)) {
			$this->color = $color;
		}
		else if(preg_match('/^#[a-f0-9]{3}$/i', $color)) {
			$this->color = $color;
		}
		else if(preg_match('/^[a-f0-9]{6}$/i', $color))
		{
			$this->color = '#' . $color;
		}
		else if(preg_match('/^[a-f0-9]{3}$/i', $color))
		{
			$this->color = '#' . $color;
		}
		//is_color_rgb ou rgba
		
		*/
	}

}