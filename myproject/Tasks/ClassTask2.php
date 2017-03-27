<?php

Class MyClass
{
    public function message($name)
    {
       echo "Hello All, I am $name";
    }
}
$name = 'Scott';
$text = new MyClass();
$text->message($name);
?>