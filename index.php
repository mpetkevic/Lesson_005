<?php
echo "Lesson 5 OOP";

class Car
{
    function go()
    {
        echo "Let's drive";
        echo "Vehicle rides";
    }
}

class SportCar extends Car
{
    function move()
    {
        parent::go();
        echo "Speed 20km/h";

    }
}

$bmw = new SportCar();
$bmw->move();