bb<?php
//overrinding-properties-methods.php

/*la notion dyal redefintion hiya kandir nafss prototype dyal attribut ola methode
 mais la valeur dyalo ola traitemant mkhtalaf ma bine classe mere et fille */



// la classe Car 
class Car {

//les attributs 
 protected $name  ;  // dans le cas private ma3andi l7a9 la nrecupirih la nmodifieh
 protected $horse  ;
 protected $acceleration ;
 public  $motor = "Normal";



//le constructeur
public function __construct($name , $horse , $acceleration)
{
    $this->name = $name ;
    $this->horse = $horse ;
    $this->acceleration = $acceleration;
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


public function message() {
    return "The Car Name Is : $this->name  , Speed : $this->acceleration ";
}

//pour tester la libiration  de la memoire  man tout les objets 
public function __destruct()
{
     echo "$this->name Removed  </br>";
}

public function __clone()
{
    echo "$this->name Cloned </br>";
}
}



class Suv extends Car 
{
    private $offRoad ;
    private $cout ;
    public $motor = "Hybride";

//declaraction d'un constructeur pur la classe fille
public function __construct($name , $horse , $acceleration ,$offRoad , $cout )
{
    $this->offRoad=$offRoad ;
    $this->cout=$cout ;
    parent::__construct($name , $horse , $acceleration ); // pour heriter le constructeur de la classe mere

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
    $this->offRoad = $offRoad ;
}



public function setCout($cout)
{
    $this->cout = $cout ;
}



 public function message() {
     return "the SUV name is : {$this->name} the type of the motor is : {$this->motor}, speed : {$this->acceleration} ";
 }

}



$quattro = new Suv("Audi Q8" , 600 , 0 , "true" , 400000) ;



echo $quattro->getName() . "<br>";
echo $quattro->getHorse() . "<br>";
echo $quattro->getAcceleration() . "</br>" ;
echo $quattro->getOffRoad() . "<br>";
echo $quattro->getCout() . " Mad </br>" ;
echo $quattro->motor . " </br>" ;  // hnaya ghadi y2aficher liya Hybride , 7int hnaya t2applique la notion de la redefintion
                                   //ya3ni mali ghadi ymchi y9alab 3la valeur dyal attribut motor  fi class Suv o ghadi yl9aha t3awdat tredefinat ghadi ykhodha hiya 
                                   // ama ila makantch ghadi yakhod valeur dyal attribut li kayn fi la class Car 

echo $quattro->message() ."</br>"; // 7ta hnaya darna la redefenition ya3ni ghadi ymchi executer la methode message li kayna fi class Suv 



$quattro->setAcceleration(100);
echo $quattro->getAcceleration() . "</br>";



$quattro->accelerate();
echo $quattro->getAcceleration() . "</br>";



$quattro ->setCout(500000);
echo $quattro->getCout() . "  Mad </br>";



//instanciation des objets de la classe Car :
$carOne=new Car("Audi",230,0);
$carTwo=new Car("Mercedes",540,0);



//pour acceder ou recuperer les attributs de la classe Car a partir du l'objet carOne  :
echo $carOne->getName()."</br>";
echo $carOne->getHorse()."</br>";
echo $carOne->getAcceleration()."</br>";
echo $carOne->motor."</br>"; 
echo $carOne->message()."</br>";


//pour acceder ou recuperer les attributs de la classe Car a partir du l'objet carTwo  :
echo $carTwo->getName()."</br>";
echo $carTwo->getHorse()."</br>";
echo $carTwo->getAcceleration()."</br>";
echo $carTwo->motor."</br>";
echo $carTwo->message()."</br>";

//pour cloner  un objet tel que les deux  objets sont indepedant 
$carThree = clone $carOne ;

//pour la destruction de la memoire   cad pour liberer la memoire  mais heuresement php wla automatiquement  kayliberer espae memoire 
/*
unset($carOne);
unset($carTwo);
unset($quattro);
*/





?>


