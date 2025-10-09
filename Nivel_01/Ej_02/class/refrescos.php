<?php




class Refrescos
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



class Zumos extends Refrescos
{

}



$zumos = new Zumos;

$zumos -> zumos_name = "Granini";
$zumos -> zumos_price = 3.25;
$zumos -> zumos_stock = 250;

