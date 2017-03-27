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
$array = array (10, 3, 6, 4, 5, 10);
$element = array_count_values($array);
foreach ($element as $value)
{  
        // var_dump($v);
    if ($value > 1)
    {
        $yes = "В массиве есть повторяющиеся элементы";
    }
}
    if (isset($yes)) 
    {
        echo $yes;
    }
else 
    {
        echo "В массиве нет повторяющихся элементов";
    }
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>