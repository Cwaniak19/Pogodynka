<?php

namespace Aworwa\ZOO\Animals;


class Jedzenie
{
	private $Kon;
	private $Kiwi;
	private $Koala;

	public function __construct($Kon, $Kiwi, $Koala)
	{
		$this->Kon = $Kon;
		$this->Kiwi = $Kiwi;
		$this->Koala = $Koala;
	}

	

	public function jedzenie()
	{
		$this->Kon->jedzenie();
		$this->Kiwi->jedzenie();
		$this->Koala->jedzenie();
	}
}
