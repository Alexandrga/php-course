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
$array = array (5, 2, 1, 3);
sort($array);
//var_dump($massiv);

$count = count($array) - 1;
for ($i = 0; $i < count($array); $i++)
    for ($j = 0; $j < $count; $j++)
    {
        if ($array[$j] > $array[$j + 1])
        {
            $value = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $value;
        }
    }
unset($array[1]); // удаление элементам массива сохраняет порядок по возростанию.
print_r($array); 
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>