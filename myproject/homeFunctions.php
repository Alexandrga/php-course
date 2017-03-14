

<?php
echo "<br>ФУНКЦИИ<br>";

echo "<br>1.<br>";  // вычисление скорости движения
?>

<form method="get">
    Введите пройденный путь <input type="text" name="distance"><br>
    Введите время движения<input type="text" name="time"><br>
    Пройденный путь в км<input type="checkbox" name="km" value="Yes"><br>
    Пройденный путь в м<input type="checkbox" name="m" value="Yes"><br>
    Время движения в час.<input type="checkbox" name="hour" value="Yes"><br>
    Время движения в сек.<input type="checkbox" name="sec" value="Yes"><br>
    <input type="submit" name="submit" value="Рассчитать">
    <input type="hidden" name="hidden" value="yes"> 
</form>
  
<?php
var_dump($_GET);
if (isset($_GET['submit']) === true)
{



    
    function speed($distance, $time)
    {
        $distance = $_GET['distance'];
        $time = $_GET['time'];
        $km = $_GET['km'];
        $hour = $_GET['hour'];
        $m = $_GET['m'];
        $sec = $_GET['sec'];
    
        if (isset($km) && isset($hour))
            if (($km == "Yes") && ($hour == "Yes"))
            {
                $result = "км/ч";
            }
        if (isset($m) && isset($sec))
        if  (($m == "Yes") && ($sec == "Yes"))
            {
                $result = "м/с";
            }

        echo "Скорость движения машины:". $distance / $time. "&nbsp$result";
        
        return;   
    }
    echo speed($distance, $time);

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



echo "<br>4.<br>"; //чтение файла

    $file = fopen ("filehome.txt","r");

while (($buffer = fgets($file, 4096)) != false)
    {
        $row = explode ("|",$buffer);
        $col[] = $row;
    
    }
    $key1 = array("title","author","print","status");
    $result = array_combine($key1,$col);
    print_r($result);
foreach ($col as $key1 => $value)
    foreach ($value as $key => $value1)
    echo $key. "=>" .$value1."<br>";
?>