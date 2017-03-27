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
for ($i = 1; $i <= 3; $i++)
{
    $number = rand(0, 100);
    echo "$number <br>";
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>
