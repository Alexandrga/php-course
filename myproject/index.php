<?php
echo 'test';



function massiv($name, $tel, $address)
{
    return $massiv = array ($name, $tel, $address);
    
}
$name = $_GET["Name1"];
$tel = $_GET["Tel1"];
$address = $_GET["Address1"];
$res = massiv ($name, $tel, $address);

foreach ($res as $k => $v)
    echo "<br>$k => $v";

function res ($a, $b)

{
	$c=$a*$a;
	$d=$c%$b;

	return $d;
}

