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
for ($i = 1; $i <= 112;  $i = $i+3)
{    
    $sum = $sum + $i;    
}
echo $sum;
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>
