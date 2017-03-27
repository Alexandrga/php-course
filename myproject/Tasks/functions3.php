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
<form method="get">
Введите процент коррекции: <input type="text" name="percent"><input type="submit" name="array" value="Получить массив">
</form>
<?php
if (isset($_GET['array']))
{
    if (!empty($_GET['percent']))
    {
        if ($_GET['percent'] <0)
            {
            echo "Введите положительное число";
            }
        else
            {    
            $array = array (5, 6.5, 10, 3.355, 400, 9.43);
            $percent = $_GET['percent'] / 100;

                function correct($array, $percent)
                {
                foreach ($array as $key => $value)
                    {
                    $value = $value * $percent;
                    $array2[] = $value;
                    }
                return $array2;
                }
            $result = correct($array, $percent);
            foreach ($result as $value)
                {   
                echo $value.",&nbsp";
                }
            }
    }
    else
    {
    echo "Введите процент коррекции";
    }
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>