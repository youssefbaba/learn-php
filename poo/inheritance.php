<?php
//inheritance.php



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
class Suv  extends Car 
{
    private $offRoad ;
    private $cout ;

//declaraction d'un constructeur pur la classe fils
public function __construct($name , $horse , $acceleration ,$offRoad , $cout )
{
    $this -> offRoad = $offRoad ;
    $this -> cout = $cout ;
    parent::__construct($name , $horse , $acceleration );

}



//getters 
public function getOffRoad()
{
    return $this->offRoad ;
}
public function getCout()
{
    return $this->cout ;
}

//setters
public function setOffRoad($offRoad)
{
    $this -> offRoad = $offRoad ;
}
public function setCout($cout)
{
    $this -> cout = $cout ;
}

}

$quattro = new Suv("Audi Q8" , 600 , 0 , "true" , 400000) ;


echo $quattro-> getName() . "<br>";
echo $quattro-> getHorse() . "<br>";
echo $quattro-> getAcceleration() . "</br>" ;
echo $quattro-> getOffRoad() . "<br>";
echo $quattro-> getCout() . " Mad </br>" ;


$quattro->setAcceleration(100);
echo $quattro->getAcceleration() . "</br>";

$quattro->accelerate();
echo $quattro->getAcceleration() . "</br>";

$quattro ->setCout(500000);
echo $quattro->getCout() . "  Mad </br>";



?>
