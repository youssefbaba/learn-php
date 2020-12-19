<?php

// implementation de la fonction sur  un matrice 
$courses = [
    ["title" => "learn Laravel" , "price" => 40],
    ["title" => "learn Spring" , "price" => 50],
    ["title" => "learn NodeJs" , "price" => 30],
    ["title" => "learn Git" , "price" => 5],
    ["title" => "learn Angular" , "price" => 60],
    ["title" => "learn Laravel Free" , "price" => 0],
    ["title" => "learn ReactJs" , "price" => 35]
    
];
function DisplayCourses($title , $price ){  
        $priceDollarToMad = convertPrice($price) ; 
        return  " $title  -  $priceDollarToMad MAD  "; 
}




function convertPrice($price){
    return $price * 10 ;
        
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses </title>

</head>

<body>

    <h1> List Courses Flagship or lowCost </h1>

    <ul style="list-style-type:square">



        <?php foreach ($courses as $course) { 
        
        $status = $course["price"] >  30 ? "  Flagship " : " lowCost "  ;
        
    ?>
        <h2><?php echo $status  ; ?></h2>
        <li> <?php  echo DisplayCourses($course["title"], $course["price"]) ; ?> </li>

        <?php  } ; ?>

    </ul>


</body>

</html>