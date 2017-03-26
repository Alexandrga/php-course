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

Class MyClass
{
    public function __construct()
    {
        echo "MyClass class has initialized ";
    }
}

$message = new MyClass();
?>
</div>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>