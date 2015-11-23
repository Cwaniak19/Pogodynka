<?php

namespace Aworwa\ZOO\Animals;

class Kiwi
{
	private $name;
	 
	public function __construct($name)
	{
	$this->name = $name;
	}

	public function say()
	{
		echo('Jestem '.$this->name);
		echo('  Teraz nic nie robie.  ');
		
	}
	

	public function jedzenie()
	{
		echo('Ja '.$this->name);
		echo('  Spozywam.  ');
		
	}
}
