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

    
$data = "5.04.2018";  // исходная дата для вычисления
$strdata = explode(".", $data); 
$array = array ("1" => 'January', "2" => 'February', "3" => 'March', 4 => 'April', "5" => 'May', "6" => 'June', "7" => 'July', "8" => 'August', "9" => 'September', "10" => 'October', "11" => 'November', "12" =>'December');
foreach ($array as $key => $value)
    {
    if ($key == $strdata[1])  
        {
        $month = $value;
        $day = $strdata[0];
        $year = $strdata[2];
        }
    }
$data1 = $day.$month.$year;
$str1 =strtotime($data1);
$str2 =time();
$diff = $str1 - $str2;

function timeday($data)
{
    $strdata = explode(".", $data); 
    $array = array ("1" => 'January', "2" => 'February', "3" => 'March', 4 => 'April', "5" => 'May', "6" => 'June', "7" => 'July', "8" => 'August', "9" => 'September', "10" => 'October', "11" => 'November', "12" =>'December');
foreach ($array as $key => $value)
    {
    if ($key == $strdata[1])  
        {
        $month = $value;
        $day = $strdata[0];
        $year = $strdata[2];
        }
    }
    $data1 = $day.$month.$year;
    $str1 =strtotime($data1);
    $str2 =time();
    $diff = $str1 - $str2;
    $times =array();
    $count_zero = false;
    $periods = array (86400, 2678400, 31536000);
    for ($i=3; $i>=0; $i--)
    {
        $period = floor($diff/$periods[$i]);
        if (($period > 0) || ($period == 0 && $count_zero))
        {
            $times[$i+1] = $period;
            $diff -= $period * $periods[$i];
            $count_zero = true;
        }
    }
$times[0] = $diff;
return $times;
}

$time_values = array ('д.', 'мес.', 'лет');

//foreach ($diff as $second)
//{
    $times = timeday($data);
    for ($i=count($times)-1; $i>=0; $i--)
    {
        echo $times[$i].''.$times_values[$i].'';
    }
echo '<br>';
//}

/*
function datetime($data)
{
    $strdata = explode(".", $data);  
    $array = array ("1" => 'January', "2" => 'February', "3" => 'March', 4 => 'April', "5" => 'May', "6" => 'June', "7" => 'July', "8" => 'August', "9" => 'September', "10" => 'October', "11" => 'November', "12" =>'December');
    $yeararray = array ("год", "года", "лет" );
    $montharray = array ("месяц", "месяца", "месяцов");
    $dayarray = array ("день", "дня", "дней");
    $wordarray = array ('остался', 'осталось');
    $arraymonth = array ('January' => '31', 'February' => '28', 'March' => '31', 'April' => '30', 'May' => '31', 'June' => '30', 'July' => '31', 'August' => '31', 'September' => '30', 'October' => '31', 'November' => '30', 'December' => '31',);
foreach ($array as $key => $value)
    {
    if ($key == $strdata[1])  
        {
        $month = $value;
        $day = $strdata[0];
        $year = $strdata[2];
        }
    }
    $data1 = $day.$month.$year;
    $str1 =strtotime($data1);
    $str2 =time();
    $diff = $str1 - $str2;
    $day =  floor($diff / 86400 + 1);
   // var_dump ($month);
    
    if ($day > 365)
    {
        
    $year = floor($day / 365);
    $day2 = $day % 365;
   /* foreach ($arraymonth as $key => $value)
    {
        if ($key == $month)
        {
            $month2 = $value;
            $datatmp = getdate();
            $datatmp2 = getdate($str1);
            $mdayfirst = $datatmp['mday'];
            $mdaylast = $datatmp2['mday'];
        foreach ($arraymonth as $k => $v)
            {
            while ($v !== $month2)
                {
                
                }
            }
            
        }
            
    }
    
    var_dump($mdaylast);
        
    $month = floor($day / 30 - $year2);
    $month2 = floor($month % 12);
    $day2 = $month2;
//var_dump($day);
    //var_dump($month);
   // var_dump($day2);
   // var_dump($day2);
    }
switch ($year) 
    {
    case 0:
    $year = "";
    $yearword =""; 
    break;
    case 1:
    $yearword = $yeararray[0];
    $word = $wordarray [0];
    break;
    }
    if (($year > 1) && ($year < 5))
    {
    $yearword = $yeararray[1];
    $word = $wordarray [1];       
    }
    if ($year > 4)
    {
    $yearword = $yeararray[2];
    $word = $wordarray [1];
    }
switch ($month)
    {
    case 0:
    $month= "";
    $monthword =""; 
    break;
    case 1:
    $monthword = $montharray[0];
   $word = $wordarray [0];
    break;
    }
    if (($month > 1) && ($month < 5))
    {
    $monthword = $montharray[1]; 
    $word = $wordarray [1]; 
    }
    if ($month > 4)
    {
    $monthword = $montharray[2];
    $word = $wordarray [1];
    }
switch ($day2)
    {
    case 0:
    $day2= "";
    $dayword =""; 
    break;
    case 1:
    $dayword = $dayarray[0];
    $word = $wordarray [0];
    break;
    }
    if (($day2 > 1) && ($day2 < 5))
    {
    $dayword  = $dayarray[1]; 
    $word = $wordarray [1]; 
    }
    if ($day2 >4 )
    {
    $dayword = $dayarray[2];
    $word = $wordarray [1];
    }
    $result ="До события $word $year $yearword $month $monthword $day2 $dayword";
return $result;
}
    $datatime = datetime($data);
    echo $datatime;*/
?>
<?php 
require_once ("../footer.php");
?> 
</div>  

</html>