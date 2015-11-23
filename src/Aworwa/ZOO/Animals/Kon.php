<?php

namespace Aworwa\ZOO\Animals;

class Kon
{
	private $name;
	 
	public function __construct($name)
	{
	$this->name = $name;
	}

	public function say()
	{
		echo('Jestem '.$this->name);
		echo('  Teraz oddycham.  ');
		
	}

	public function jedzenie()
	{
		echo('Ja '.$this->name);
		echo('  Jem.  ');
		
	}

}
