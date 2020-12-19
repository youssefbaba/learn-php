<?php

// la classe Car 
class Car {

//les attributs 
 public $name  ;
 public $horse  ;
 public $acceleration ;

//le constructeur
function __construct($name , $horse , $acceleration)
{
    $this -> name = $name ;
    $this -> horse = $horse ;
    $this -> acceleration = $acceleration;
} 

//les  méthodes
public function accelerate()
{
    $this->acceleration += 2 ;
}


}

//pour visualiser tous les attributs de la classe Car:
echo "<pre>" . print_r(get_class_vars("Car") , true) . "</pre>" ;  


//pour visualiser tous les methodes de la classe Car :
echo "<pre>" . print_r(get_class_methods("Car") , true) . "</pre>" ;
 
//instanciation des objets :
$carOne = new Car("Audi" , 230 , 0);
$carTwo = new Car("Mercedes"  , 540 , 0);


//recuperation le type du l'objet car :
echo  get_class($carOne) . "</br>";



//pour acceder les attributs  :
echo $carOne->name ."</br>";
echo $carOne->horse ."</br>";
echo $carOne->acceleration."</br>";


echo $carTwo->name ."</br>";
echo $carTwo->horse ."</br>";
echo $carTwo->acceleration."</br>";


//pour acceder les  méthode :
 $carOne->accelerate();
 $carOne->accelerate();
 //echo $carOne->acceleration . "</br>";


 $carTwo->accelerate();
 $carTwo->accelerate();
 echo $carTwo->acceleration . "</br>";



?>