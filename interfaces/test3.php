<?php

interface Car { 
    public function setModel($name);
    
    public function getModel();

    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

interface Vehicle {
    public function setHasWheels($bool); 
   
    public function getHasWheels();
}

class miniCar implements Car, Vehicle {
    private $model; 
    private $hasWheels;

    public function setModel($name) {
        $this->model = $name;
    }

    public function getModel() {
        return $this->model;
    }

    public function demo() {
        return self::LEAVING_MESSAGE;
    }

    public function setHasWheels($bool) {
        $this->hasWheels = $bool;
    }

    public function getHasWheels() {
        return $this->hasWheels ? "has wheels" : "no wheels";
    }
}

$mini = new miniCar;
$mini->setModel('Otewa');
$mini->setHasWheels('Yes');
echo $mini->getModel();
echo "\n";
echo $mini->getHasWheels();
echo "\n";
echo $mini->demo();