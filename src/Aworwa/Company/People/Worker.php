<?php

namespace Aworwa\Company\People;

class Worker
{
	private $name;
	public function _construct($name) {
		$this->name = $name;
}
	public function work(){
		echo ('I am '.$this->name);
		echo ('I am working very hard');
}
}
