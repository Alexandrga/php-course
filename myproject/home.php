

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

    echo "<br>3.<br>";

    $massiv = array(5,10,3,2,1,5,6,10);

    for ($i=0; $i<=9; $i++)
    {
            if ($massiv [$i] == $massiv[$i+1])
            {
                    ;

            }
            else
            {
                echo "В массиве нет повторяющихся элементов";
            }


    }


