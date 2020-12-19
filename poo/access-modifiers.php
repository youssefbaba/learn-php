<?php
//access-modifiers.php



// la classe Car 
class Car {

//les attributs 
 private $name  ;  // dans le cas private ma3andi l7a9 la nrecupirih la nmodifieh
 private $horse  ;
 private $acceleration ;



//le constructeur
public function __construct($name , $horse , $acceleration)
{
    $this -> name = $name ;
    $this -> horse = $horse ;
    $this -> acceleration = $acceleration;
} 



//Getters
public function getName()
{
    return $this->name ;
}

public function getHorse()
{
    return $this->horse ; 
}

public function getAcceleration()
{
    return $this->acceleration ;
}


//Setters
public function setAcceleration($speed)
{ 
    if (filter_var($speed , FILTER_VALIDATE_INT) && $speed >= 0) {
        $this->acceleration = $speed ;
    }
     
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


//pour acceder ou recuperer les attributs de la classe Car  :
echo $carOne->getName() . "</br>";
echo $carOne->getHorse() . "</br>";
echo $carOne->getAcceleration() . "</br>";


//pour acceder  a les  méthode de la classe Car :
$carOne->accelerate();
echo $carOne->getAcceleration() ."</br>";

//pour modifier la valeur d'un attribut 
$carOne ->setAcceleration(100) ;
echo $carOne ->getAcceleration();

















?>