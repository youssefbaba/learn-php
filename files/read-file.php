<?php


$path1 = "content.txt";
$path2 = "../content1.txt";

if (file_exists($path1) &&  file_exists($path2)) {

    $phrases1 = readfile($path1) ;
    echo  $phrases1 ;
    echo " </br>" ;

    $phrases2 = readfile($path2) ;
    echo  $phrases2 ;
    echo "</br>" ;

}else {
    echo " files does not exist ! " ;
}

//d'autre methode pour la manupilation des  fichies 
//size of file
echo " size of file 1 is : " . filesize($path1) ."</br>" ;
echo " size of file 2 is : " . filesize($path2)  ."</br>";

// path of file 
echo " path of file 1 is : " . realpath($path1) . "</br>" ;
echo " path of file 2 is : " . realpath($path2)  . "</br>";






?>