<?php

// continue => A eviter 
$courses = [
    ["title" => "learn Laravel" , "price" => 40],
    ["title" => "learn Spring" , "price" => 50],
    ["title" => "learn NodeJs" , "price" => 30],
    ["title" => "learn Git" , "price" => 5],
    ["title" => "learn Angular" , "price" => 60],
    ["title" => "learn Laravel Free" , "price" => 0],
    ["title" => "learn ReactJs" , "price" => 35]
    
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses </title>

</head>

<body>

    <h1> Liste du cours  </h1>

    <ul style="list-style-type:square">
        <?php foreach ($courses as $course) { ?>

        <?php if ($course["title"] == "learn Laravel Free" ) {
                break; // Stop       
        } ; ?>

        <?php if ($course["price"] <= 10 ) {
                continue ; // Ignore ou évite  les prix qui sont inferieur a 10 $       
        } ; ?>

        <li> <?php echo $course["title"] . " => " . $course["price"] ." $ ";  ?> </li>

        <?php  } ; ?>

    </ul>


</body>

</html>