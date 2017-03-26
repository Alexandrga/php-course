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
$array = array (1, 2, 4, 4, 2, 5, 5);
$result = array_unique($array);
foreach ($result as $value) 
{
    echo $value;
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>