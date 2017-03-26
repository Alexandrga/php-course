<?php
class AutoFactory {
    public static function create ($make, $model, $color = 'white')
    {
        if ($make == 'Toyota')
            return new ToyotaAuto($make,$model);
        return new Auto ($make, $model)
    }
}

class ToyotaAuto extends Auto {
    public color;
    
    public function __construct ($make, $model, $color ='white')
    {
    parent::__construct($make, $model);
    $this->color = $color;  
    }
}

class Auto {
    private $model;
    private $make;
    
    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }
    public function getMakeAndModel()
    {
        return $this->make. '::' . $this->model;
    }
}
$obj1 = new Auto('Toyota', 'Ist');
$obj1 = new Auto('Nissan', 'Honda');
echo $obj3->getMakeAndModel();
$obj4 = AutoFactory::create('Toyota','Lexus', 'black');
$obj5 = AutoFactory::create('Nissan','Sunny', 'pink');

echo $obj5->getMakeAndModel();
var_dump ($obj1);