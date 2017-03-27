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
$n = 9;
$array = array();
for ($i = 0; $i <= 10; $i++)
{
    $array[$i] = $i * $i;  
}
foreach ($array as $key => $value) 
{
    echo "$value &nbsp";
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>