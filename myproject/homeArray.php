

<?php
echo "Массивы<br>";

echo "1.<br>";

    $n = 9;
    $array = array();
for ($i = 0; $i <= $n; $i++)
    {
    if ($i%2 == 0)
        {
            $array[$i] = 0;
        }
    else {
            $array[$i] = 1;
            echo $array[$i];
        }   
    }

echo "<br>2.<br>";

for ($i = 0; $i <= 10; $i++)
    {
        $array[$i] = $i * $i;  
    }
foreach ($array as $key => $value) {
    echo "$value &nbsp";
    }

echo  "<br>3.<br>";

    $array = array (5, 10, 3);
    echo "Произведение занчений массива равно: ".array_product($array). "<br>";
    echo "Сумма значений массива равна:".array_sum($array)."<br>";
    $number = 1;
for ($i = 0; $i <= 2; $i++)
    {
        $number = $number * $array[$i];
    }
    echo "Произведение без функции равно: $number<br>";
    $sum = 0;
for ($i = 0; $i <= 2; $i++)
    {
        $sum = $sum + $array[$i];
    }
    echo "Сумма без функции равна: $sum<br>";

echo "<br>4.<br>";

    $array = array (10, 3, 6, 4, 5, 10);
    $element = array_count_values($array);
foreach ($element as $value)
    {  
        // var_dump($v);
        if ($value>1)
            {
                $yes = "В массиве есть повторяющиеся элементы";
            }
    }
if (isset($yes)) {
    echo $yes;
}
else {
    echo "В массиве нет повторяющихся элементов";
}

echo "<br>5.<br>";  // нахождение максимального и минимального и перестановка местами

    $array = array (8, 3, 6, 4, 5, 1);
    $max = max($array);
    $min = min($array);
    //var_dump($min);

foreach ($array as $k => $v)
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
    $array[$key2] = $max;
    //var_dump($massiv);
    $array[$key] = $min;   
    print_r ($array);

echo "<br>6.<br>"; // Сортировка массива по возрастанию.

    $array = array (5, 2, 1, 3);
    sort($array);
    //var_dump($massiv);
    echo "Сортировка массива по возрастанию с помощью функции:";
foreach ($array as $value) {
        echo $value;
}

    $count = count($array) - 1;
for ($i = 0; $i < count($array); $i++)
    for ($j = 0; $j < $count; $j++)
        {
        if ($array[$j]>$array[$j + 1])
            {
                $value = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $value;
            }
        }
    print_r($array);   // вывод массива по возрастанию без функции
    //var_dump($massiv); 

echo "<br>7.<br>"; 

    unset($array[1]); // удаление элементам массива сохраняет порядок по возростанию.
    print_r($array); 
        
echo "<br>8.<br>"; // удаление в массиве повторов значений

    $array = array (1, 2, 4, 4, 2, 5, 5);
    $result = array_unique($array);
foreach ($result as $value) {
        echo $value;
}
        
echo "<br>9.<br>";

    $array = array (4, 2, 8, 5, 3);
    shuffle ($array);               // перемешивает массив случайным образом
foreach ($array as $key => $value) {
        echo $key. "=>". $value."<br>";   
}
        
echo "<br>10.<br>";  // Два упорядоченных массива

    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(5, 6, 8, 12, 15);
    $array3 = array_merge($array1, $array2);
    sort($array3);
foreach ($array3 as  $value) {
        echo $value."<br>";  
}

echo "<br>11.<br>";  // Вставка элемента с нулевым значением

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
            $temp = array_slice($array1, -($count-($j+1)), ($count-($j+1)));
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
    echo $value."<br>";
                    
echo "<br>12.<br>";  // Вывести число прописью.