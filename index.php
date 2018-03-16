<?php
echo "Lesson 5 OOP <br>";

class Car
{
    function go()
    {
        echo "Let's drive <br>";
        echo "Vehicle rides <br>";
    }
}

class SportCar extends Car
{
    public $speed;
    public $distance;
    public $transmission;
    use moveBackward;

    function __construct($speed = 0, $distance = 0, $transmission)
    {
        $this->speed = $speed;
        $this->distance = $distance;
        $this->transmission = $transmission;
    }

    function move()
    {
        parent::go();
        echo "This car has " . $this->speed . " m/s speed and " . $this->transmission . " transmission.";
        echo "Must drive " . $this->distance . " meters distance.<br>";
        echo "Engine On<br>";
        if ($this->transmission == 'automatic') {
            $this->transmissionAuto();
        } else {
            $this->transmissionManual();
        }
        echo "<br>";
        $this->engine();
        echo "Car stops<br>";
        echo "Transmission Off<br>";
        echo "Engine OFF<br>";


    }

    function engine()
    {
        $hp = $this->speed / 2;
        $road = 0;
        $temperature = 0;
        $overHeatTemp = 90;
        echo "This car has " . $hp . " horse power<br>";
        while ($road < $this->distance) {
            $road += $this->speed;
            if($temperature >= $overHeatTemp) {
                $temperature -= 10;
                echo "Ventilator ON <br>";
            } else {
                $temperature += 5;
            }

            echo "Car drives " . $road . " meters. <br>";
            echo "Temperature " . $temperature . " degrees<br>";
        }

    }

    function transmissionAuto()
    {
        echo "Car has automatic transmission. <br>";
        $moveFormward = "Car moves forward<br>";
        $this->mBack();
    }

    function transmissionManual()
    {
        echo "Car has manual transmission. <br>";
        $moveFormward = "Car moves forward<br>";
        $maxSpeedForFirstGear = 20;
        if ($this->speed > $maxSpeedForFirstGear) {
            echo "Car drives with first gear<br>";
        } else {
            echo "Car drives with second gear<br>";
        }
        $this->mBack();
    }


}

trait moveBackward
{
    public function mBack()
    {
        echo "Car drives backward<br>";
    }
}

$bmw = new SportCar(20, 2000, 'automatic');
$bmw->move();