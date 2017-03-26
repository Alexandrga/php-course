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
$array1 = array(-1, -2, -3, 4, -2);
$array2 =[];
$count = count($array1);
$j  =0;
for ($j = $j; $j < $count; $j++)
{
    // var_dump($j);
    $array2[$j] = $array1[$j];
    //var_dump($array2);
           
    if ($array2[$j] < 0) 
    {
        $temp = array_slice($array1, - ($count-($j + 1)), ($count-($j + 1)));
        //var_dump($temp);
        array_splice($array1, $j);
        // var_dump($array1);
        array_push($array2, 0);
        //var_dump($array2);
        $array1 =array_merge($array2, $temp);
        // var_dump($array2);
        $count = $count + 1;
        $j++;
    }
    //var_dump($array2);    
}
foreach ($array2 as $value)
{
    echo $value."<br>";
}
?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>