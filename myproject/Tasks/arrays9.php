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
$array = array (4, 2, 8, 5, 3);
shuffle ($array);               // перемешивает массив случайным образом
foreach ($array as $key => $value) 
{
    echo $key. "=>". $value."<br>";   
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>