<?php

class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
        $this->name = $name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }
}
  
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_color('Orange');

echo $apple->get_name();
echo "\n";
echo $banana->get_color();

?>
