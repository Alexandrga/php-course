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
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(5, 6, 8, 12, 15);
$array3 = array_merge($array1, $array2);
sort($array3);
foreach ($array3 as  $value) 
{
    echo $value."<br>";  
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>