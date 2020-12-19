<?php
 echo " Test1 pour varible global :  </br> " ; 
$name = "Youssef" ;
function saySalam( $age)
    {
        $name = "Hassna";
        echo " Salam Your Name is :  $name. </br> Your Age is $age. </br> " ; // hnaya ghadi ykhda bi name == Hassna
    }

saySalam(24);
echo "Hello $name </br></br>"; // hnaya ghadi ykhdam bi name == Youssef



echo " Test2 pour varible global :  </br> " ; 
$name = "Hamza" ;
function sayHello( $age)
    {   
        global $name ; // hnaya kin9oul lih  khdam bi variable globale li hiya  name == Hamza 
        echo "Hello  Your Name is :  $name. </br> Your Age is $age. </br> " ;
    }

sayHello(25);
echo "Hello $name </br></br>";


echo " Test3  overide varible global :  </br> " ; 
$name = "Reda" ;
function saySalut( $age)
    {   
        global $name ; // hnaya kin9oul lih  khdam bi variable globale li hiya  name == Hamza
        $name = "Toufik"; // overide = redefinition dyal variable name  
        echo "Hello  Your Name is :  $name. </br> Your Age is $age. </br> " ;
    }

saySalut(28);
echo "Hello $name"; // hnaya ghada name tkoune fiha la valeur Toufik 











?>