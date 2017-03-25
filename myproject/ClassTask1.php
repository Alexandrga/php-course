<?php


Class MyClass
{
    public function message()
    {
        echo "MyClass class has initialized ";
    }
}

$message = new MyClass;
echo $message->message();