<?php

class vehicle
{
    protected $name;
    protected $color;
    protected $price;

};

class Car extends Vehicle
{

    function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
    public function displayName()
    {
        echo ($this->name);
    }
}

$lambo = new Car("lambo","red", "$265k");
$lambo->displayName();


?>