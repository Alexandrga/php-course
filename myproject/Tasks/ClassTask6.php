<?php

class Mycalculator {
	private $x;
	private $y;

	public function __construct($x,$y)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function add()
	{
		return $this->x + $this ->y;
	}
	
	public  function extract()
	{
		return $this->x - $this ->y;
	}
		
 	public function multiply()
	{
		return $this->x * $this ->y;
		
	}
	public function divide()
	{
		return $this->x / $this ->y;
		
	}
}

$calculate = new Mycalculator(12,6);
echo $calculate->add();
