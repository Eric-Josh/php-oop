<?php

abstract class Car {
    protected $model;
    protected $height;
  
    abstract public function calcTankVolume();
}

class Bmw extends Car {
    protected $rib;

    // The properties are introduced to the class through the constructor
    public function __construct($model, $rib, $height)
    {
        $this -> model = $model;
        $this -> rib = $rib;
        $this -> height = $height;
    }

    // Calculate the tank volume for rectangular tanks
    public function calcTankVolume()
    {
        return $this -> rib * $this -> rib * $this -> height;
    } 
}

class Mercedes extends Car {
    protected $radius;
     
    public function __construct($model, $radius, $height)
    {
        $this -> model = $model;
        $this -> radius = $radius;
        $this -> height = $height;
    }

    // Calculates the volume of cylinder
    public function calcTankVolume()
    {
        return $this -> radius * $this -> radius * pi() * $this -> height;
    }
}

function calcTankPrice(Car $car, $pricePerGalon)
{
    return $car -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
}

$bmw1 = new Bmw('62182791', 14, 21);
echo calcTankPrice($bmw1, 3)."\n";

$mercedes1 = new Mercedes('12189796', 7, 28); 
echo calcTankPrice($mercedes1, 3);
