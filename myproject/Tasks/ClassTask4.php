<?php

class Sort{

	public static function sortArray($array)
	{
	sort($array);
	return $array;
	}
}

$array = array(11, -2, 4, 35, 0, 8, -9);
$obj = new Sort();
print_r($obj->sortArray($array));
