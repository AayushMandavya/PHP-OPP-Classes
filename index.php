<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New Class Work</h1>
</body>
</html>


<?php
    class Car{
        public $color;
        public $speed = 20;
        public $position = 100;
        
        public $wheels = '4 wheeler';

    function __construct($color){
        $this->color =$color;
    }
    function getColor(){
        echo "The car's color is $this->color";
    }
    function move()
    {
        echo "<br>";
        echo "The car is moving, with current speed $this->speed";
    }
    }
$car =new Car("yellow");
 $car->getColor();
echo $car-> move();
echo '<br>';



?>