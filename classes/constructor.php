<?php

class Fruit {
    public $name;
    public $color;

    // saves us from calling the set_name() 
    // method which reduces the amount of code
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "\n";
echo $apple->get_color();