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
$array = array (8, 3, 6, 4, 5, 1);
$max = max($array);
$min = min($array);
//var_dump($min);
foreach ($array as $k => $v)
{
    if ($v == $max)
    {
        $key = $k;
    }
    if ($v == $min)
    {
        $key2 = $k;
    }
}
$array[$key2] = $max;
//var_dump($massiv);
$array[$key] = $min;   
print_r($array);
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>