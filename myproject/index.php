<?php
echo 'test';



$text = $_GET["text"];
$file = $_GET["File"];


$file = fopen ($file, "w+");
fwrite ($file, $text);




