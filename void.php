<?php

// void  sans parametres 
    function saySalam()
    {
            echo " Hello Bright Coding Devellopers </br> " ;
    }

saySalam() ; // appelle de la void saySalam()

// void avec parametre 

    function sayFirstNameLastName( $firstName , $lastName , $age )
    {
        echo  " My Name is :  $firstName $lastName  -   My Age is : $age  ans   </br> " ;
    }

sayFirstNameLastName(" Youssef " , " Baba ", 24 ) ;

// dans le cas ou  le developper n'a pas enter un argument sur la void 

    function oublierArgument($firstName , $lastName , $age = 28 )
    {
        echo  " My Name is :  $firstName $lastName  -   My Age is : $age  ans   </br> " ;
    }

oublierArgument(" Hassna " , " Baba " ) ;    // Dans le cas de développer oublier argument


//  dans le cas d'override d'argument 

    function overrideArgument($firstName , $lastName , $age = 20 )
        {
            echo  " My Name is :  $firstName $lastName  -   My Age is : $age  ans   </br> " ;
        }
  
overrideArgument(" Abdelkader " , " Baba " , 55 ) ; // override arguement dans la methode 

// l'odre da la parametre est tres important

    function ordreArgument( $argument1 , $argument2 , $argument3 )
    {
        echo " l'ordre des arguemnt est tres important : $argument1 puis $argument2 puis $argument3  </br>" ;
    }

ordreArgument(" argument1 " , " argument2 " , " argument3 ") ; //  overrideArgument de la fonction sur un table 

// implementation de la void  sur  un simple table 

 $contact = ["nom" => "Youssef" , "prenom" => "Baba" , "age" => 24 ] ;

 function implementationSimpleTable($information)
 {
     echo " {$information["nom"]} - {$information["prenom"]} - {$information["age"]} ans ";

 }

implementationSimpleTable($contact) ;


// implementation de la void sur  un matrice 
$courses = [
    ["title" => "learn Laravel" , "price" => 40],
    ["title" => "learn Spring" , "price" => 50],
    ["title" => "learn NodeJs" , "price" => 30],
    ["title" => "learn Git" , "price" => 5],
    ["title" => "learn Angular" , "price" => 60],
    ["title" => "learn Laravel Free" , "price" => 0],
    ["title" => "learn ReactJs" , "price" => 35]
    
];

      function DisplayCourses($sousTable)
      {
         echo " {$sousTable["title"]} - {$sousTable["price"]}  $ "; // pour acceder a un attribuer d'un table en utilise { }  
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

    <h1> Liste du cours  </h1>

    <ul style="list-style-type:square">
        <?php foreach ($courses as $course) { ?>

        <?php if ($course["title"] == "learn Laravel Free" ) {
                break; // Stop       
        } ; ?>

        <?php if ($course["price"] <= 10 ) {
                continue ; // Ignore ou évite  les prix qui sont inferieur a 10 $       
        } ; ?>

        <li> <?php DisplayCourses($course) ; ?> </li>

        <?php  } ; ?>

    </ul>


</body>

</html>
