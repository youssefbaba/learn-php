<?php

// Exemple simple pour array_map 

echo " Test1 </br>";
$table = [ 23 , 34 , 56 , 54 ] ;

function calculCube($value)
{
    return $value * $value * $value ;
}

$tableCube = array_map('calculCube' , $table) ; 


foreach ($tableCube as $value) {
    echo  " - $value  "   ;
    
}

echo "</br>" ;


//foncttion anonyme hiya wa7ad fonction ma3andhach nom kin7tajha 
//ghir fi wa7ad endroit exacte  donc la da3i  nssmiha 

echo "TestFunctionAnonyme </br>" ;
$prices = [40 , 50 , 45 , 60] ;
$step = 2 ;

$result = array_map(function ($item) use($step) {
                           return $item * $step ;}
             , $prices) ;
foreach ($result  as $value) {
     echo "- $value " ;
}





?>