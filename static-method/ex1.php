<?php

class Utilis {
    static public $numCars = 0;
   
    static public function addToNumCars($int)
    {
        $int = (int)$int;
        self::$numCars += $int;
    }
}

echo Utilis::$numCars;

Utilis::addToNumCars(3);
echo Utilis::$numCars;

Utilis::addToNumCars(-1);
echo Utilis::$numCars;

// The main cases in which we consider the use of static methods and
// properties are when we need them as counters and for utility classes.