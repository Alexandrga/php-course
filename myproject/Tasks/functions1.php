<html>
<head>
    <title>Prototype</title>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <link href="../style.css" type="text/css" rel="stylesheet">
</head>
<div id="main">
<?php 
require_once ("../header.php");
?>
<?php 
require_once ("../menu.php");
?>
<form method="get">
Введите пройденный путь <input type="text" name="distance"><br>
Введите время движения<input type="text" name="time"><br>
Пройденный путь в км/ч <input type="checkbox" name="km" value="Yes"><br>
Пройденный путь в м/c<input type="checkbox" name="m" value="Yes"><br>
<input type="submit" name="submit" value="Рассчитать">
<input type="hidden" name="hidden" value="yes"> 
</form>
  
<?php

function speed($distance, $time, $value)
    {
    return $distance / $time."&nbsp".$value;   
    }

if (isset($_GET['submit']))
{
    $distance = $_GET['distance'];
    $time = $_GET['time'];
    $distance = isset($_GET['distance']) ? $_GET['distance'] : 10;
    $time = isset($_GET['time']) ? $_GET['time'] : 10;
    $km = isset($_GET['km']) ? $_GET['km'] : 10;
    $m = isset($_GET['m']) ? $_GET['m'] : 10;

    if ((isset($km) == true) && ($km != 10))
    {
    $value = "км/ч";
    }
    if ((isset($m) == true) && ($m != 10))
    {
    $value = "м/с";
    }
    $speed = speed($distance, $time, $value);
    echo $speed;
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  

</html>