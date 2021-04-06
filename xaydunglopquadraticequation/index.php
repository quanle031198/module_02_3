
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>[Bài tập] Xây dựng lớp QuadraticEquation (Phương trình bậc hai)</title>
</head>

<body>
    <form method="POST">
        <input id="a" type="text" name="a" placeholder="input number a" />
        <input id="b" type="text" name="b" placeholder="input number b" />
        <input id="c" type="number" name="c" placeholder="input number c" />
        <input type="submit" id="submit" value="Caculate" />
    </form>
</body>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numA = $_POST['a'];
    $numB = $_POST['b'];
    $numC = $_POST['c'];
    
        $quadraticEquation = new QuadraticEquation($numA, $numB, $numC);
        echo "Delta = ".$quadraticEquation->getDiscriminant() . "<br/>";
        echo $quadraticEquation->check();
    
}

?>
<?php
class QuadraticEquation
{
    private float $a;
    private float $b;
    private float $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }



    public function getA()
    {
        return $this->a;
    }


    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant()
    {
        $delta = (($this->b * $this->b) - 4 * $this->a * $this->c);
        return $delta;
    }
    public function getRoot1()
    {
        $root1 = (((-$this->b) + sqrt($this->getDiscriminant())) / (2 * $this->a));
        return $root1;
    }
    public function getRoot2()
    {

        $root2 = (((-$this->b) - sqrt($this->getDiscriminant())) / (2 * $this->a));
        return $root2;
    }
    public function check()
    {
        if ($this->getDiscriminant() >= 0) {

            echo "Root1 = ".$this->getRoot1() . "<br/>";
            echo "Root2 = ".$this->getRoot2();
        } else if ($this->getDiscriminant() == 0) {
            echo $this->getRoot1();
        } else {
            echo "The equation has no roots";
        }
    }
}


?>
