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
function word($number) 
{  
$number1 = array ( 
                  1 => "один", 
                  2 => "два",
                  3 => "три",
                  4 => "четыре",
                  5 => "пять",
                  6 => "шесть",
                  7 => "семь",
                  8 => "восемь",
                  9 => "девять");
$number2 = array  ( 10 => "десять",
                    11 => "одиннадцать",
                  12 => "двенадцать",
                  13 => "тринадцать",
                  14 => "четырнадцать",
                  15 => "пятнадцать",
                  16 => "шестнадцать",
                  17 => "семнадцать",
                  18 => "восемнадцать",
                  19 => "девятнадцать");
$number3 = array (2 =>"двадцать",
                  3 =>"тридцать",
                  4 =>"сорок",
                  5 =>"пятьдесят",
                  6 =>"шестьдесят",
                  7=>"семьдесят",
                  8 =>"восемьдесят",
                  9 =>"девяносто");
$number4 = array (1 =>"сто",
                  2 =>"двести",
                  3 =>"триста",
                  4 =>"четыресто",
                  5 =>"пятьсот",
                  6 =>"шестьсот",
                  7 =>"семьсот",
                  8 =>"восемьсот",
                  9 =>"девятьсот", );
$form = array ('тысяча', 'тысячи', 'тысяч');
$form2 = array (1 => 'одна', 2 => 'две');
    
$numb = str_pad($number, 6, '0', STR_PAD_LEFT);
$N1 = substr($numb, 0, 1);
$N2 = substr($numb, 1 , 1);
$N3 = substr($numb, 2 , 1);
$N23 = substr($numb, 1, 2);
$N4 = substr($numb, 3, 1);
$N5 = substr($numb, 4, 1); 
$N6 = substr($numb, 5, 1); 
$N56 = substr($numb, 4, 2); 
//var_dump($numb);
$str = "";
if ($N1 > 0)    // анализируем тысячные разряды
    {
        $str = $number4[$N1];    
    }
if (($N2 > 0) && ($N2 > 1))
    {
    if ($N3 == 0)
        {
        $str = $str."&nbsp".$number3[$N2]; 
        }
        elseif (($N3 > 0) && ($N3 < 3))
        {
        $str = $str."&nbsp".$number3[$N2]."&nbsp".$form2[$N3]; 
        }
        elseif ($N3 > 2)
        {
        $str = $str."&nbsp".$number3[$N2]."&nbsp".$number1[$N3]; 
        }
    }
    elseif ($N2 == 1)
    {
        $str = $str."&nbsp".$number2[$N23];
    }
    elseif ($N2 == 0)
    {
        if (($N3 > 0) && ($N3 < 5))
        {
            if (($N3 > 0) && ($N3 < 3))
            {
            $str = $str."&nbsp".$form2[$N3];
            }
            else
            {
                $str = $str."&nbsp".$number1[$N3];
            }
        }
    }
    if  (($N3 == 0) || ($N2 == 1) || ($N3 > 4)) // склоняем тысячи
    
        if (($N1 == 0) && ($N2 == 0) && ($N3 == 0))
        {
        $str = $str;
        }
        else
        {
        $str = $str."&nbsp".$form[2]."&nbsp";
        }
        if ($N3 == 1)
        {
        $str = $str."&nbsp".$form[0]."&nbsp";
        }
        elseif (($N3 > 1) && ($N3 < 5))
        {
        $str = $str."&nbsp".$form[1]."&nbsp";
        }
$str1 = $str;
$str2 = "";
   if ($N4 > 0)   // анализируем сотые разряда
        {
        $str2 = $number4[$N4];    
        }
    if (($N5 > 0) && ($N5 > 1))
    {
        if ($N6 == 0)
        {
        $str2 = $str2."&nbsp".$number3[$N5];
        }
        elseif ($N6 > 0)
        {
        $str2 = $str2."&nbsp".$number3[$N5]."&nbsp".$number1[$N6];
        }
    }
    elseif ($N5 == 1)
    {
        $str2 = $str2."&nbsp".$number2[$N56];
    }
    elseif ($N5 == 0)
    {
        if ($N6 ==1)
        {
        $str2 = $str2."&nbsp".$number1[$N6];
        }
        if (($N6 > 1) && ($N6 < 5))
        {
        $str2 = $str2."&nbsp".$number1[$N6];
        }
        if ($N6 > 4)
        {
        $str2 = $str2."&nbsp".$number1[$N6];
        }
    }
return $str1."&nbsp".$str2;
}

echo word("1000");
?>
<?php 
require_once ("../footer.php");
?> 
</div>  

</html>