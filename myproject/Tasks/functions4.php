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
$file = "filehome.txt";
function readfile2($file)
{
    $file = fopen ($file, "r+");
    $key1 = array ("title", "author", "print", "status");
    while (($buffer = fgets($file, 4096)) != false)
    {
    $row[] = explode ("|", $buffer);
    }
    $array = array();
    foreach ($row as $key0 => $value)
        foreach ($value as $key => $val)
        {
        $array[$key0][$key1[$key]] = $val;
        }
return $array;
}
$readfile = readfile2($file);
// print_r($readfile);   // вывод массива книг
$status = 1;    // статус книг
function publication($status, $readfile)
{
    foreach ($readfile as $k => $v)
        foreach ($v as $key => $value)
        {
        $list[$key] = $value;
        if ($value == $status)
            {
            $listbook = $list;
            $array[] = $listbook;
            }
        }
return $array;    
}

$result = publication($status, $readfile);
print_r ($result);  // вывод массива книг в соответствии с статусом

?>
<?php 
require_once ("../footer.php");
?> 
</div>  
</html>