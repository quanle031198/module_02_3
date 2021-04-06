<?php
class Fan
{
   
    private int $speed;
    private $turnOn;
    private $radiusFan;
    private $color;
    function __construct()
    {
        $this->slow = 1;
        $this->medium  = 2;
        $this->fast =  3;
        $this->speed = 1;
        $this->turnOn =  false;
        $this->radiusFan = 5;
        $this->color = 'blue';
    }


    public function setSpeed($speed)
    {
        $this->speed = $speed;

    }
    public function getSpeed()
    {
        return $this->speed;
    }

    public function setTurnOn($turnOn)
    {
        $this->turnOn = $turnOn;

    }
    public function getTurnOn()
    {
        return $this->turnOn;
    }

    public function setRadiusFan($radiusFan)
    {
        $this->radiusFan = $radiusFan;

    }
    public function getRadiusFan()
    {
        return $this->radiusFan;
    }

    public function setColor($color)
    {
        $this->color = $color;

    }
    public function getColor()
    {
        return $this->color;
    }
    public function toString()
    {
        if ($this->getTurnOn()) {
            return ("Speed: " . $this->getSpeed() . ", Color: " . $this->getColor() . ", radius: " . $this->getRadiusFan() . ", Fan is on");
        } else {
            return ("Speed: " . $this->getSpeed() . ", Color: " . $this->getColor() . ", radius: " . $this->getRadiusFan() . ", Fan is off");
        }
    }
}
$toshiba = new Fan();
echo $toshiba->setSpeed(3);
echo $toshiba->setRadiusFan(10);
echo $toshiba->setColor('yellow');
echo $toshiba->setTurnOn(true);
echo $toshiba->toString()."<br/>";

$itachi = new Fan();
echo $itachi->setSpeed(2);
echo $itachi->setRadiusFan(5);
echo $itachi->setColor('blue');
echo $itachi->setTurnOn(false);
echo $itachi->toString();