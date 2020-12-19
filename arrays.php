<?php


//Indexed Arrays  0,1,2,3 ............ 
$people = ["Youssef" , "Reda" , "Mohamed" , "Hassna"] ;
$number = [74,34,82,32,7] ;
echo "<pre>" . print_r($people , true) . "</pre>"; // pour afficher les element du tableau people 
$people[2] = "Hassane" ; // Écraser une valeur déjà existe dans le tableau
$people[] = "Mouad" ; //  premiere methode pour Ajouter une valeur a la fin du tableau 
array_push($people , "Toufik"); // deuxieme methode pour ajouter une valeur a la fin d'une table 
echo "<pre>" . print_r($people , true) . "</pre>";



//associative Arrays  [cle1 => valeur1 , cle2 =>valeur2 ,....... ]
$contact = ["Mohamed" => "069806996969" , "Youssef" => "06748477464" , "Hassna" => "06345262773"];
$contact["Samira"] = "0674646466"; // pour ajouter une valeur au tableau 
echo " le  numero du Youssef est  : " . $contact["Youssef"]  ;
echo "<pre>" . print_r($contact , true) . "</pre>";


//Spread Operator Simple Table 
$ajouterALaFinDuPeople = [...$people , "Khalid" , "Omar"] ; // ajouter des elements a la fin du tableau on utilisant Spread Operator 
$ajouterAuDebutDuPeople = ["Tarik" , "Hamza" ,...$people] ; //ajouter  des elements au debut du tableau people on utilisant Spread Operator 
$resultMergePeolpeNumberMethodeClassic = array_merge($people, $number) ; //  preumiere methode pour melanger deux table : table 1 + table 2 
$resultMergePeopleNumerSpreadOperator = [...$people ,...$number] ; // deuxieme  methode pour melanger deux table : table 1 + table 2 
$resultMix = ["Debut", ...$people , "Milieu" , ...$number , "Fin"] ; 


//Multidimensional Arrays Associative 

$courses = [
    ["title" => "learn Laravel" , "price" => 40],
    ["title" => "learn Spring" , "price" => 50],
    ["title" => "learn NodeJs" , "price" => 30],
    ["title" => "learn Angular" , "price" => 60],
    ["title" => "learn ReactJs" , "price" => 35],
    ["title" => "learn Git" , "price" => 45]
];
echo "<pre>" . print_r($courses , true) . "</pre>"; // pour afficher tous les elements du matrice  courses 
echo "le prix de NodeJs est  : " . $courses[2]["price"] ; // pour afficher un element de la matrice courses 
echo  $courses[2]["title"] ;
$courses[2]["title"] = "learn Php";
echo "<pre>" . print_r($courses , true) . "</pre>"; 


//Multidimensional Arrays Indexed 

$cars = [
    ["Dacia" ,"Docker"],
    ["Merc" ,"Amg"],
    ["Dacia" ,"Logan"],
    ["Peugeot" ,"206"]
] ;
echo "<pre>" .print_r($cars , true) . "</pre>" ;  // pour afficher tous les elements du matrice  car
echo "la mark du dacia est  : " . $cars[2][0] ; //pour afficher un seul element 
echo $cars[0][2] ; 
$cars[0][2] = "Duster" ;
echo "<pre>" .print_r($cars , true) . "</pre>" ;



// Spread Operator Matrix 
$courses[] = ["title" => "learn Python" , "price" => 50 ]; // la methode classic pour ajouter un tableau a la fin du matrice courses 
echo "<pre>" .print_r($courses , true) . "</pre>" ;
$courses  = [...$courses , ["title" => "learn Java" , "price" => 50] , ["title" => "learn Djongo" , "price" => 45]] ; // ajouter a la fin du matrice 
echo "<pre>" .print_r($courses , true) . "</pre>" ;
$courses = [["title" => "learn Kotlin" , "price" => 53] , ["title" => "learn C#" ,"price" => 63] ,...$courses] ;
echo "<pre>" .print_r($courses , true) . "</pre>" ;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>le premier élément du tableau people est : <?php echo $people[0] ; ?></p>
    <p>affichage des éléments du tableau people est : <?php echo "<pre>" . print_r($people , true) . "</pre>" ; ?></p>
    <p>le nombre des éléments qui existe dans le tableau people est : <?php  echo count($people) ; ?></p>
    <p>le premier element du tableau assiciative contact est : <?php echo $contact["Mohamed"] ; ?></p>
    <p>SpreadOperator pour ajouter a la fin du tableau people :
        <?php echo "<pre>" . print_r($ajouterALaFinDuPeople , true) . "</pre>" ; ?></p>
    <p>SpreadOperator pour ajouter au debut du tableau people :
        <?php echo "<pre>"  . print_r($ajouterAuDebutDuPeople , true )  . "</pre>" ; ?></p>
    <p>resultat du merge tableau people et number par methode classic :
        <?php echo "<pre>" . print_r($resultMergePeolpeNumberMethodeClassic , true ) . "</pre>" ; ?></p>
    <p>resultat du merge tableau people et number par methode SpreadOperator :
        <?php echo "<pre>" . print_r($resultMergePeopleNumerSpreadOperator , true )  ."</pre>" ; ?></p>
    <p>tableau Mixte : <?php  echo "<pre>" .print_r($resultMix , true) . "</pre>"; ?></p>
    <p>les elements de la matrices courses est : <?php echo "<pre>" . print_r($courses, true) . "</pre>";  ?></p>
    

</body>

</html>
