
<?php

Class MyClass
{
	public $number;
	public function __construct($number)
	{
		$this->number = $number;
	}
    public function factorial($number)
    {
    	if ($this->number === 0) return 1;
    	else 
       	return $this->number * (factorial($this->number)-1);
    }
}
$text = new MyClass ('6');
//$text->number = 6;
var_dump($text);
var_dump($text->factorial('5'));
?>