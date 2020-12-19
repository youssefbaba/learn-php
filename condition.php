<?php


// Les structures de contrôle 
$note = 9 ;

if ($note > 16 ) {
        echo " Excelent " ;
}elseif ($note > 13 )
    {
        echo " Bien " ;
}elseif ($note > 11 )
    {
        echo " Assez Bien " ;
}elseif ($note >= 10 )
{
    echo " Pas Mal " ;
}else{
        echo " Annee Prochaine " ;
}    

//Multidimensional Arrays Associative 

$courses = [
    ["title" => "learn Laravel" , "price" => 40],
    ["title" => "learn Spring" , "price" => 50],
    ["title" => "learn NodeJs" , "price" => 30],
    ["title" => "learn Angular" , "price" => 60],
    ["title" => "learn ReactJs" , "price" => 35],
    ["title" => "learn Git" , "price" => 45]
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    <h1> la liste des cours plus de 40 $ </h1>

    <ul style="list-style-type:square">
        <?php foreach ($courses as $course) { ?>

        <?php  if ($course["price"] >= 40 ) { ?>

        <li> <?php echo $course["title"] . " => " . $course["price"] ." $ ";  ?> </li>

        <?php } ; ?>


        <?php  }; ?>

    </ul>

    <
    <h1> Table des cours moins de 40 $ </h1>
    <table style="width:100%">
        <tr>
            <th>Title</th>
            <th>Price</th>
        </tr>

        <?php foreach ($courses as $course) { ?>

        <?php  if ($course["price"] <=  40) { ?>

        <tr>
            <td> <?php  echo $course["title"] ; ?> </td>
            <td> <?php  echo $course["price"] ; ?> </td>
        </tr>


        <?php  } ;?>


        <?php  } ;  ?>
    </table>







</body>

</html>