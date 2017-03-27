<?php

class MyClass {
    static $staticProperty = 1;
    
    public function changeStaticProperty()
    {
        self::$staticProperty++;
    }
    public function getStaticProperty()
    {
        return self::$staticProperty;
    }
}
$obj = new MyClass();
echo $obj->getStaticProperty();
$obj->changeStaticProperty();
echo $obj->getStaticProperty();
?>