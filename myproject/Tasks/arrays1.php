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
$n = 9;
$array = array();
for ($i = 0; $i <= $n; $i++)
{
    if ($i%2 == 0)
    {
        $array[$i] = 0;
    }
    else 
    {
        $array[$i] = 1;
    } 
echo $array[$i];
}
?>
</div>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>