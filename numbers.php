<?php 
$count1 = 0 ;
$count2 = 0 ;
$count3 = 1 ;
$count4 = 1 ;
$number1 = 2 ;
$number2 = 8 ;
$rayon = 5 ;
$surface = pi() * $rayon ** 2 ;
$arrondissement = ceil($surface) ;



$sum = $number1 + $number2 ; 
$substraction1 = $number1 - $number2 ;
$substraction2 = $number2 - $number1 ;
$multiplication = $number1 * $number2 ;
$division1 = $number1 / $number2 ;
$division2 = $number2 / $number1 ;
$power1 = $number1 ** $number2 ;
$power2 = $number2 ** $number1 ;
$order = 2 * ( 4 + 9 ) / 3 ; // Brackets , Power , Division , Multiplication , Addition , Soustraction 
$surface = pi() * $rayon ** 2 ;
$arrondissement = ceil($surface) ;
$partiEntiere = floor($surface) ;





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> the sum of num1 and num2 is : <?php echo $sum ;  ?></p>
    <p> the subtraction1 of num1 and num2 is : <?php echo $substraction1 ;  ?></p>
    <p> the subtraction2 of num2 and num1 is : <?php echo $substraction2 ;  ?></p>
    <p> the multiplication of num1 and num2 is : <?php echo $multiplication ;  ?></p>
    <p> the division1 of num1 and num2 is: <?php echo $division1 ;  ?></p>
    <p> the division2 of num2 and num1 is: <?php echo $division2 ;  ?></p>
    <p> the power1 of num1 and num2 is: <?php echo $power1 ;  ?></p>
    <p> the power2 of num2 and num1 is: <?php echo $power2 ; ?></p>
    <p> the correct value is : <?php echo $order ?> it's not 5,666666666666667 </p>
    <p> display before incrementation: <?php echo $count1++ ; ?></p>
    <p> increment before display : <?php echo ++$count2 ; ?></p>
    <p> display before decrement : <?php echo $count3-- ; ?></p>
    <p> decrement before display : <?php echo --$count4; ?></p>
    <p> ShortHand1 ( incrementation par un pas quelconque dans ce exemple le pas est 10 ) :
        <?php echo  $count1 += 10 ;?> </p>
    <p> ShortHand2 ( decrementation par un pas quelconque dans ce exemple le pas est 2 ) : <?php echo  $count1 -= 2 ;?>
    </p>
    <p> ShortHand3 : <?php echo  $count1 *= 6 ;?> </p>
    <p> ShortHand4 : <?php echo  $count1 /= 4 ;?> </p>
    <p> la surface d'une cercle de rayon 5 est : <?php echo $surface ; ?></p>
    <p> la partie entière de la surface est : <?php echo $partiEntiere ; ?> </p>
    <p> l'arrondissement de la surface est : <?php  echo $arrondissement ;?></p>



</body>

</html>