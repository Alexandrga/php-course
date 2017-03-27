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
for ($i = 35; $i <= 87; $i++)
{
    if ($i%7 == 1 || $i%7 == 2 || $i%7 == 5)
    {
    echo "$i <br>";       
    }
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>
