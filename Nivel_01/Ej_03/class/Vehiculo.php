<?php

class Vehiculo
{
    private array $Properties;

    public function __set($atribute, $value)
    {
        if(!property_exists($this,$atribute))
        {
            $this-> Properties[$atribute] = $value;
        }

    }


    public function __get($atribute)
    {
        return $this -> Properties[$atribute];
    }

    public function getProperties()
    {
        return $this -> Properties;
    }


}


class Car extends Vehiculo
{

}

$car1 = new Car;


$car1 -> car_brand = "Toyota";
$car1 -> car_model = "Corolla";
$car1 -> car_colour = "Red";
$car1 -> car_price = "21.720$ ";