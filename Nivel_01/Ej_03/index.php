<?php

/*
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics
que hi ha (que no sigui __construct)
*/

require_once 'class/Vehiculo.php';

echo "Propiedades del coche:" . PHP_EOL;
echo $car1 -> car_brand . " -> Marca del coche." . PHP_EOL;
echo $car1 -> car_model . " -> Modelo del coche." . PHP_EOL;
echo $car1 -> car_colour . " -> Color del coche." . PHP_EOL;
echo $car1 -> car_price . " -> Precio del coche." . PHP_EOL;
