
<?php

Class Factorial
{
	private $number;
	private $error = '';
	/**
	* @param int $n  // док блоки пишут для публичных функций в классах
	* 
	*/
	public function calculate($number)
	{
		if ($number<0)
		{
			throw new Exception ('Error:'); // исключение
			//return 'Error:';
		}
		$this->number = $number;
	
 
    	$factorial = 1;
    	for ($i=$this->number; $i>1; $i--)
    	{
    		$factorial = $factorial *$i;
    	}
    	return $factorial;
    }
}
$obj = new Factorial();
echo $obj->calculate('6');

?>