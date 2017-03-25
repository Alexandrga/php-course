<?php

Class MyClass
{
    public function message($name)
    {
       echo "Hello All, I am $name";
    }
}

$text = new MyClass;
$text->message('Scott');
?>