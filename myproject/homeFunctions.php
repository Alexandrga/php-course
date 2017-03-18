

<?php
    echo "<br>ФУНКЦИИ<br>";

    echo "<br>1.<br>";  // вычисление скорости движения
?>

<form method="get">
    Введите пройденный путь <input type="text" name="distance"><br>
    Введите время движения<input type="text" name="time"><br>
    Пройденный путь в км/ч <input type="checkbox" name="km" value="Yes"><br>
    Пройденный путь в м/c<input type="checkbox" name="m" value="Yes"><br>
    <input type="submit" name="submit" value="Рассчитать">
    <input type="hidden" name="hidden" value="yes"> 
</form>
  
<?php

function speed($distance, $time, $value)
    {
    return $distance / $time."&nbsp".$value;   
    }

if (isset($_GET['submit']))
{
    $distance = $_GET['distance'];
    $time = $_GET['time'];
    $distance = isset($_GET['distance']) ? $_GET['distance'] : 10;
    $time = isset($_GET['time']) ? $_GET['time'] : 10;
    $km = isset($_GET['km']) ? $_GET['km'] : 10;
    $m = isset($_GET['m']) ? $_GET['m'] : 10;

    if ((isset($km) == true) && ($km != 10))
    {
    $value = "км/ч";
    }
    if ((isset($m) == true) && ($m != 10))
    {
    $value = "м/с";
    }
    $speed = speed($distance, $time, $value);
    echo $speed;
}

    echo "<br>2.<br>"; // вычисление факториала числа

function factorial($x) 
    {
    if ($x === 0) return 1;
    else 
    return $x * factorial($x - 1);
    }
    echo factorial(6);
    
    echo "<br>3.<br>";  // процентная коррекция

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
                    $percent = $_GET['percent']/100;

            function correct($array, $percent)
                {
                foreach ($array as $key => $value)
                    {
                    $value = $value * $percent;
                    $array2[] = $value;
                    }
                    return $array2;
                }
                    $result = correct($array,$percent);
            foreach ($result as $value)
                    {   
                    echo $value.",&nbsp";
                    }
            }
    }
    else 
                    echo "Введите процент коррекции";
}

    echo "<br>4.<br>"; //чтение файла

    $file = "filehome.txt";
function readfile2($file)
{
    $file = fopen ($file,"r+");
    $key1 = array ("title","author","print","status");
while (($buffer = fgets($file, 4096)) != false)
    {
    $row[] = explode ("|",$buffer);
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
    print_r($readfile);

    echo "<br>5.<br>"; //дата
    
    $data = "30.05.2017";  // исходная дата для вычисления

function datetime($data)
{
    $strdata = explode(".", $data);  
    $array = array ("1" => 'January', "2" => 'February', "3" => 'March', 4 => 'April', "5" => 'May', "6" => 'June', "7" => 'July', "8" => 'August', "9" => 'September', "10" => 'October', "11" => 'November', "12" =>'December');
    $yeararray = array ("год", "года", "лет" );
    $montharray = array ("месяц","месяца", "месяцов");
    $dayarray = array ("день","дня","дней");
    $wordarray = array ('остался', 'осталось');
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
    $diff = $str1 -$str2;
    $day =  floor($diff / 86400 )-4;
    if ($day >31)
    {
    $year = floor($day/360);
    $year2 = $year *12;
    $month = floor($day/30-$year2);
    $month2 = floor($month % 12);
    $day2 = $month2;
    var_dump($day);
    var_dump($month);
    var_dump($year);
    var_dump($day2);
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
    if (($year >1) && ($year <5))
    {
    $yearword = $yeararray[1];
    $word = $wordarray [1];       
    }
    if ($year >4)
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
    if (($month >1) && ($month <5))
    {
    $monthword = $montharray[1]; 
    $word = $wordarray [1]; 
    }
    if ($month >4)
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
    if (($day2 >1) && ($day2 <5))
    {
    $dayword  = $dayarray[1]; 
    $word = $wordarray [1]; 
    }
    if ($day2 >4)
    {
    $dayword = $dayarray[2];
    $word = $wordarray [1];
    }
    $result ="До события $word $year $yearword $month $monthword $day2 $dayword";
return $result;
}
    $datatime = datetime($data);
    echo $datatime;
?>