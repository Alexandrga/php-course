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
<div class ="content">
<?php 
for ($i = 1; $i <= 10000; $i++)
{
    if ($i%5 <> 0)
        if (strpos($i, "3") == true)
        {
        echo "$i <br>";        
        }
}
?>
</div>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>
