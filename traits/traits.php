<?php
trait Logger {
    public function log($msg) {
        echo "Log: $msg \n";
    }
}

trait Validator {
    public function validate($data) {
        echo "Validating $data \n";
    }
}

class Car {
    use Logger, Validator; //multiple traits
}

$car = new Car();
$car->log("Car started \n");
$car->validate("Engine data");
