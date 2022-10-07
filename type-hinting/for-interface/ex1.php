<?php

class Bmw {
    protected $model;
    protected $rib;
    protected $height;

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

class Mercedes {
    protected $model;
    protected $radius;
    protected $height;
     
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

// Type hinting ensures that the function gets only Bmw objects as arguments
function calcTankPrice(Bmw $bmw, $pricePerGalon)
{
    return $bmw -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
}

$bmw1 = new Bmw('62182791', 14, 21);
echo calcTankPrice($bmw1, 3);

$mercedes1 = new Mercedes('12189796', 7, 28); 
// result in error because calcTankPrice must use type hint of Bmw
echo calcTankPrice($mercedes1, 3);

// Solution in ex2 with refactoring