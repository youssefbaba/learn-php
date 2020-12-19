<?php
echo " Test Arrow Function </br> " ;
$prices = [40 , 50 , 45 , 60] ;

$step = 2 ;

$result = array_map(fn($item) => $item * $step , $prices) ;
foreach ($result  as $value) {
     echo "- $value " ;
}

echo " </br> " ;

echo "Test1 d'une fonction simple  </br> ";
 function addition($number1 , $number2)
 {
     return $number1 + $number2 ;
 }

 $result = addition( 3, 4);
 echo "$result </br>";


 echo "Test2 d'un variable recoi un fonction anonyme  </br> ";
 $addition = function ($number1 , $number2)
        {
            return $number1 + $number2 ;
        };

 $result = $addition( 3, 4);
 echo "$result </br>" ;


 echo "Test3  d'un variable recoi un arrow fonction </br> ";
$addition = fn($number1 , $number2 ) => $number1 + $number2 ;

$result = $addition(3 ,4 );

echo " $result </br>";









?>