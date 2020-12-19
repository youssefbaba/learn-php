<?php

echo "Test1 le passage par valeur : </br></br>" ;

$firstName = "Youssef" ;
$age = 30 ;

function sayFirstName($firstName , $age ) // hada howa  le passage par valeur  ya3ni mali dwazt  hadak  variable firstName  
{                                    //la methode sayFirstName(..) hanaya khadt ghir la copie dyal la variable firstName  
    $firstName = "Reda" ;             //ya3ni ay changement darto 3la  la variable firstName  kaytra ghir 3la copie o original kiyb9a howa howa 
    echo " Hello  Your FirstName is : $firstName </br> Your Age is  : $age  </br>" ;
}
sayFirstName($firstName , 25);
echo  " Hello Your FirstName is : $firstName </br>  Your Age is : $age </br></br> " ;

echo "Test2 le passage par reference :</br></br>" ;


$lastName = "Baba" ;
$weight = 69 ;
function sayLastName(&$lastName ,$weight )  // mali dart sayLastName(&$lastName ,$weight) hada howa le passage par refrence ya3ni mali dawazt  hadak variable lastName 
{                                            // la methode sayLatName(..) hnaya kindwaz original dyal la variable  lastName  
    $lastName ="Gharib";                     // ya3ni ay changement darto 3la la variable lastName  kiytbdal original 
    echo " Your LastName is : $lastName  </br> Your weight is : $weight Kg </br>" ;
    
}
sayLastName($lastName , 65) ;
echo  " Hello Your LastName  is : $lastName </br>  Your Weight is : $weight Kg </br></br> " ;







?>