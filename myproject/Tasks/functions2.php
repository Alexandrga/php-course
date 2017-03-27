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
function factorial($x) 
    {
    if ($x === 0) return 1;
    else 
    return $x * factorial($x - 1);
    }
echo factorial(6);
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>