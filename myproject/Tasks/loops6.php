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
$sum = 0;
set_time_limit(600);
for ($i = 100000; $i <= 999999; $i++)
{
    $str1 = substr($i, 0, 3);
    $str2 = substr($i, 3, 6);
    if ($str1 == $str2)
    {
        echo "$i<br>";
        $sum = $sum + 1;
    }
}
echo "Общее число счастливых билетов равно: $sum<br>";
$procent = ($sum * 100) / $i;
echo "Процент от общего числа билетов:".$procent."%<br>";
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>
