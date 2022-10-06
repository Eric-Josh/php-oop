<?php

use TestNameSpace\Fruit;

require 'test3.php';

class FruitJuice extends Fruit
{
    public function get_name()
    {
        $name = new Fruit();

        $name->set_name('James'); // public class always accessible

        return $name->name; 
    }

    public function get_color()
    {
        $color = new Fruit();

        $color->set_color('Green'); // protected class will return only if it's class is extended

        return $color->color;
    }

    public function get_weight()
    {
        $color = new Fruit();

        $color->set_weight('190kg'); // private class will return error

        return $color->weight;
    }
}

$mango = new FruitJuice();
echo $mango->get_name()."\n";
echo $mango->get_color()."\n";
// echo $mango->get_weight();