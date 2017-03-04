<?php
echo 'test';



$text = $_GET["text"];
$file = $_GET["File"];
$file = fopen ($file, "wb");
for ($i=1; $i<50; ++$i)
{
fwrite ($file, $text);
}




