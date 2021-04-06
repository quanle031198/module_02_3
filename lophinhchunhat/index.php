<?php
class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
    public function display()
    {
        return "Retangle{" . " width= " . $this->width . " , height= " . $this->height."}";
    }
}
$retangle = new Rectangle($width, $height);

echo $retangle->height . "<br/>";
echo $retangle->width . "<br/>";
$retangle->height = 30;
$retangle->width = 40;

echo $rectangle->height;
echo $rectangle->width;
echo $retangle->getPerimeter() . "<br/>";
echo $retangle->getArea() . "<br/>";
echo ( $retangle->display());
