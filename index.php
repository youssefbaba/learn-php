<?php
    define('FACULTY' , 'Informatique') ;
    $title = "Bright Coding" ; 
    $firstName = "Youssef" ;
    $lastName = "Baba" ; 
    
    // echo  "$firstName $lastName" ; //concatenation 1
    // echo $firstName." ".$lastName ; //concatenation2
    //echo "My Name is : $firstName $lastName " ; //concatenation3
    //$fullName = " My Name is : \"$firstName $lastName\" " ;
    $fullName = "$firstName $lastName" ;
    
    $age = 30 ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ; ?></title>
</head>

<body>

    <h1><?php echo $title ; ?></h1>
    <p>Hello my dear developers .</p>
    <p>My Name is : <?php echo $fullName ;  ?> </p>
    <p>My Age is : <?php echo $age ; ?></p>
    <p>My Faculty is : <?php  echo FACULTY ; ?></p>
    <p>the number of character strings that exist in this sentence is : <?php echo strlen($fullName) ; ?></p>
    <p>the character that exists in position 4 is : <?php echo $fullName[4] ; ?> </p>
    <p>Lowercase all characters :<?php echo strtolower($fullName)?></p>
    <p>Uppercase all characters :<?php echo 
strtoupper($fullName)?></p>


</body>

</html>