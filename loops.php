<?php 
    
    $courses = ["Larvel" , "SpringBoot" , "ApsMvc" , "Django"];


    // for($compteurFor = 0 ; $compteurFor < count($courses)  ;$compteurFor++ ){

    //     echo "<pre>" . $courses[$compteurFor] . "</pre>" ;
    // } ; 
    // pour faire un commantaire  je selectionne et puis  ctrl / 




    //affichage on utilisant boucle for 
    echo "affichage on utilisant boucle for  : " ;
    for($compteurFor = 0 ; $compteurFor < count($courses)  ;$compteurFor++ ){

        echo "<pre>" . $courses[$compteurFor] . "</pre>" ;
    } ; // pour faire un commantaire  je selectionne et puis  ctrl / 

    
    //affichage on utilisant boucle while 
    echo "affichage on utilisant boucle while : " ;
     $compteurWhile = 0 ;
    while($compteurWhile < count($courses)) {

        echo "<pre>" .$courses[$compteurWhile] . "</pre>" ;
        $compteurWhile++ ; 

    } ;
    // affichge on utilasnt boucle foreach 
    echo "affichage on utilisant boucle foreach : " ;
    foreach ($courses as $value0) {

        echo "<pre>" . $value0 . "</pre>"  ;
        
    } ;

    // Using foreach in Multidimensional Arrays Associative 
    echo " Multidimensional Arrays Associative : " ;
    $tutorial = [
        ["title" => "learn Laravel" , "price" => 40],
        ["title" => "learn Spring" , "price" => 50],
        ["title" => "learn NodeJs" , "price" => 30],
        ["title" => "learn Angular" , "price" => 60],
        ["title" => "learn ReactJs" , "price" => 35],
        ["title" => "learn Git" , "price" => 45]
    ];
    
    foreach ($tutorial as $value1) {
        echo "<pre>" . $value1["title"] . " - " . $value1["price"] . "</pre>" ;
        
    } ;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses </title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }

    #t01 {
        width: 100%;
        background-color: #f1f1c1;
    }
    </style>
</head>

<body>
    <h1> List of courses </h1>

    <ul style="list-style-type:square">
        <?php foreach ($tutorial as $tuto2) { ?>

        <li> <?php echo $tuto2["title"] . " => " . $tuto2["price"] ." $ ";  ?> </li>

        <?php  }; ?>

    </ul>

    <h1> Table of courses </h1>
    <table style="width:100%">
        <tr>
            <th>Title</th>
            <th>Price</th>
        </tr>

        <?php foreach ($tutorial as $tuto) { ?>
        <tr>
            <td> <?php  echo $tuto["title"] ; ?> </td>
            <td> <?php  echo $tuto["price"] ; ?> </td>
        </tr>

        <?php  } ;  ?>
    </table>

</body>

</html>