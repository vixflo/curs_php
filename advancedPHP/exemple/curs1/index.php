<?php

class Car
{

    public $color;
    public $make;
    public $model;
    public $fuel;

    public function pourFuel($amount)
    {

        $this->fuel = $this->fuel + $amount;
        echo "$amount litres in poured in the tank";

    }

}

$changeFuel = new Car();

$changeFuel->pourFuel(10);
