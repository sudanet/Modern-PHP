<?php

// What is class and instance

// class Car
// {
//     public $name;
//     public $color;
//     public $model;
//     private $price;
// }

// $myCar = new Car();
// echo "<pre>";
// echo $myCar->model = 2000;
// echo "</pre>";

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
class SayHello
{
    public function __construct()
    {
        echo "Hello and welcome Mr";
    }
}
$hi = new SayHello('Abdalla');
