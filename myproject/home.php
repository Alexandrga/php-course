

<?php
/*echo "Циклы<br>";
echo "1.<br>";

for ($i=1; $i<=10; $i++)
    echo "Helllow";

echo "<br>2.<br>";

$sum = 0;

for ($i=1; $i<=112;  $i=$i+3)
{    
   
    $sum = $sum+$i;
    
}
    echo $sum;

echo "<br>3.<br>";

for ($i=1; $i<=10000; $i++)
{
    if ($i%5 <> 0)
        if (strpos ($i,"3") == true)
    {
        echo "$i <br>";
        
    }
}

echo "<br>4.<br>";

for ($i=1; $i<=3; $i++)
{
    $number = rand (0,100);
    echo "$number <br>";
}

echo "<br>4.<br>";

for ($i=35; $i<=87; $i++)
{
    if ($i%7 == 1 || $i%7 == 2 || $i%7 == 5)
    {
    
        echo "$i <br>";
       
    }
  
 }
 echo "<br>5.<br>";
$sum = 0;
set_time_limit(600);
for ($i=100000; $i<=999999; $i++)
{
    $str1 = substr($i,0,3);
    $str2 = substr($i,3,6);
    if ($str1 == $str2)
        {
            echo "$i<br>";
            $sum = $sum+1;
        }
}
echo "Общее число счастливых билетов равно: $sum<br>";
$procent = ($sum*100)/$i;
echo "Процент от общего числа билетов:".$procent."%<br>";
*/
echo "Массивы<br>";
echo "1.<br>";
$n=9;
$mas = array();
for ($i=0; $i<=$n; $i++)
    
{
          if ($i%2 == 0)
        {
            $mas[$i] = 0;
        }
            else 
            $mas[$i] = 1;
            echo $mas[$i];
}

echo "<br>2.<br>";

for ($i=0; $i<=10; $i++)
{
    $massiv[$i] = $i*$i;  

}
foreach ($massiv as $key => $value) {
    echo "$value &nbsp";
}

echo "<br>3.<br>";

$massiv = array (5,10,3);

echo "Произведение занчений массива равно: ".array_product($massiv). "<br>";
echo "Сумма значений массива равна:".array_sum($massiv)."<br>";
$proizv = 1;
for ($i=0; $i<=2; $i++)
{
    $proizv = $proizv*$massiv[$i];
}
    echo "Произведение без функции равно: $proizv<br>";
$sum = 0;
for ($i=0; $i<=2; $i++)
{
    $sum = $sum+$massiv[$i];
}
    echo "Сумма без функции равна: $sum<br>";

echo "<br>4.<br>";

    $massiv = array (10,3,6,4,5,10);
    $res = array_count_values($massiv);
        foreach ($res as $v)
        {  
           // var_dump($v);
                if ($v>1)
            
                    {
                        $yes = "В массиве есть повторяющиеся элементы";
       

                    }
            
        }
if (isset($yes))
echo $yes;
else echo "В массиве нет повторяющихся элементов";

echo "<br>5.<br>";  // нахождение максимального и минимального и перестановка местами

$massiv = array (8,3,6,4,5,1);

$max = max($massiv);
$min = min($massiv);
//var_dump($min);

foreach ($massiv as $k => $v)
{
    if ($v == $max)
        {
            $key = $k;
        }
    if ($v == $min)
        {
            $key2 = $k;
        }
}
$massiv[$key2] = $max;
//var_dump($massiv);
$massiv[$key] = $min;
 
        
print_r ($massiv);

echo "<br>6.<br>";

$massiv = array (5,2,1,3);

/*sort($massiv);
//var_dump($massiv);
echo "Сортировка массива по возрастанию с помощью функции:";
foreach ($massiv as $value)
    echo $value;*/

$count = count($massiv)-1;

for ($i=0; $i<count($massiv); $i++)
    
    for ($j=0; $j<$count; $j++)
{
    if ($massiv[$j]>$massiv[$j+1])
    {
        $value = $massiv[$j];
        $massiv[$j] = $massiv[$j+1];
        $massiv[$j+1] = $value;
    }
        
        
        
}
//print_r($massiv);   // вывод массива по возрастанию 
   //var_dump($massiv); 

echo "<br>7.<br>";
    
unset($massiv[1]);
print_r($massiv); // удаление элементам массива сохраняет порядок по возростанию.

echo "<br>8.<br>"; // удаление в массиве повторов значений

    $massiv = array (1,2,4,4,2,5,5);
    $res = array_unique($massiv);
    print_r($res);

echo "<br>9.<br>";

    $massiv = array (4,2,8,5,3);
    shuffle ($massiv);               // перемешивает массив случайным образом
        foreach ($massiv as $key => $value)
            echo $key. "=>". $value."<br>";   

echo "<br>10.<br>";  // Два упорядоченных массива

    $massiv1 = array(1,2,3,4,5);
    $massiv2 = array(5,6,8,12,15);

    $massiv3 = array_merge($massiv1, $massiv2);
    sort($massiv3);

        foreach ($massiv3 as  $value)
            echo $value."<br>";   

echo "<br>11.<br>";  // Вставка элемента с нулевым значением

    $massiv = array(-1,-2,3);
        $count = count($massiv);


    
    for ($j=0; $j<3; $j++)
            

                if ($massiv[$j] < 0)
                             //  var_dump($j);
                {
                     $massivtemp = array_slice($massiv, $j+1);
    
                    for ($k=$j+1; $k<$count; $k++)
                    {
                        unset($massiv[$k]);
                    }
                     var_dump($massiv);
                    $massiv[] = 0;
                    $result = array_merge ($massiv, $massivtemp);
                        
                 //   array_splice ($massiv, ($j+1));
                  //  array_values($massiv);
                    
//var_dump($result);
                   // $array_massiv = array_merge ($massiv, $massivtemp);
                   // $count = $count+1;
                //  array_values ($array_massiv);
                    
                }
                         
            
            
       //var_dump($array_massiv);
           //   $array_massiv = array_merge ($massiv, $massivtemp);  
  // array_values ($array_massiv);
 //var_dump($array_massiv);
                   // $result = array_merge($massiv, $massivtemp);   

//print_r ($result);

echo "<br>11.<br>";  // Вывести число прописью.


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
<input type="submit" value="Рассчитать">
</form>

        
<?php
function Speed ($distance, $time)
{
    
return $distance/$time;  
    
}

    if (($_POST['km'] == "Yes") && ($_POST['hour'] == "Yes"))
    {

    echo "Скорость движения машины: ".Speed($_POST['distance'],$_POST['time']). "км/ч";
    
    }
    if  (($_POST['m'] == "Yes") && ($_POST['sek'] == "Yes"))
    {

    echo "Скорость движения машины: ".Speed($_POST['distance'],$_POST['time'])."м/сек";

    }

echo "<br>2.<br>"; // вычисление факториала числа

   function factorial($x) {
if ($x === 0) return 1;
else return $x*factorial($x-1);
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
foreach ($col as $key1 => $value)
    foreach ($value as $key => $value1)
    echo $key. "=>" .$value1."<br>";



?>



    
    