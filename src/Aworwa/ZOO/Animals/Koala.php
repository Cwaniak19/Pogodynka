<?php

namespace Aworwa\ZOO\Animals;

class Koala
{
	private $name;
	 
	public function __construct($name)
	{
	$this->name = $name;
	}

	public function say()
	{
		echo('Jestem '.$this->name);
		echo('  Teraz gadam.  ');
		
	}


	public function jedzenie()
	{
		echo('Ja '.$this->name);
		echo('  amciam.  ');
		
	}

}
