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
<?php 
$array = array (5, 10, 3);
echo "Произведение занчений массива равно: ".array_product($array). "<br>";
echo "Сумма значений массива равна:".array_sum($array)."<br>";
$number = 1;
for ($i = 0; $i <= 2; $i++)
{
    $number = $number * $array[$i];
}
echo "Произведение без функции равно: $number<br>";
$sum = 0;
for ($i = 0; $i <= 2; $i++)
{
    $sum = $sum + $array[$i];
}
echo "Сумма без функции равна: $sum<br>";
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>