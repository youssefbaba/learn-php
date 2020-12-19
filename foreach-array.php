<?php

$table1 =["youssef" , "baba" ,"sidibennour",24,"etudiant"];
$table2 =["nom" => "youssef" , "prenom" => "baba" ,"ville" => "sidibennour","age" => 24,"situation" => "etudiant"];
echo "Test1 </br>";
foreach ($table1 as $value) {
    echo " $value " ;
    
}
echo "</br>";

echo"Test2 </br>";
foreach ($table2 as $key => $value) {
    echo " $key  : $value    ,";
}

echo "</br>";
$table3 = [
    ["youssef" , "baba" ,"sidibennour",24,"etudiant"],
    ["reda" , "driouch" ,"rabat",23,"employe"],
    ["hassna" , "baba" ,"safi",28,"etudiante"],
    ["hamza" , "aziz" ,"casablanca",24,"etudiant"]
  
];
$table4 = [
    ["nom" => "youssef" , "prenom" => "baba" ,"ville" => "sidibennour","age" => 24,"situation" => "etudiant"],
    ["nom" => "reda" , "prenom" => "driouch" ,"ville" => "rabat","age" => 23,"situation" => "employe"],
    ["nom" => "hassna" , "prenom" => "baba" ,"ville" => "tanger","age" => 28,"situation" => "etudiante"],
    ["nom" => "hamza" , "prenom" => "aziz" ,"ville" => "casablanca","age" => 24,"situation" => "etudiant"],

];
echo "Test3 </br>";
foreach ($table3 as $value) {
    foreach ($value as $info) {
         echo " $info , " ;
    }
    echo " - " ;
}
echo "</br>";

echo "Test4 </br>";
foreach ($table4 as $key => $value) {
    foreach ($value as $info) {
        echo " $info , " ;
   }
   echo " - " ;
}

?>