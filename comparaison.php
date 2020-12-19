<?php

// les operation de comparaison  : == egale , != différent , < Inférieur strictement  , >  Supérieur strictement  , <= Inférieur ou égal ,>= Supérieur ou égal
// boolean : true ou false  , echo  true => "1" , echo false => " "
// null equivalent  0 , true equivalent 1 , false equivalent 0 
echo true ; // "1" chaine de caractere "1"
echo "</br>";

echo false ; // " " chaine de caractere vide " "
echo "</br>";

echo 5 < 10 ; //  oui  5 < 10 cad true  et donc echo du true donne  un chaine caractere "1"
echo "</br>";

echo 5 > 30 ; // non cad false  et donc echo  du false donne un chaine de caractere vide " "
echo "</br>";

echo 5 != 6 ; // oui 5 est différent de 6 cad true et donc echo  du false donne un chaine de caractere  "1"
echo "</br>";

echo 5 == 5 ;// oui 5 egale 5 cad true et donc  echo du true donne  un chaine de caractere "1"
echo "</br>";

echo "Mohamed" < "Kamal" ; // kay9arane bi ma bine lettre1 dyal chaine1 et lettre1  dyal chaine2  suivant code ASCI  par exemple M == 77 et K == 75   donc 77 < 75 donne false et echo du false donne un chaine de caractere vide " "  
echo "</br>";

// Comparaison large avec == : $a == $b true  si $a est égal à $b après le transtypage.

echo  1 == true ; // true  => donne  chaine de caractere "1"  
echo "</br>";
echo  1 == false ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 == 1; // true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 == 0 ; // false => donne  chaine de caractere vide " "  
echo "</br>";
echo  1 == -1 ; // false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 == "1" ; // true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 == "0"; // false => donne  chaine de caractere vide  ""  
echo "</br>";
echo  1 == "-1" ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 == null ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 == "php" ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 == "" ; // false => donne  chaine de caractere vide   " "  
echo "</br>";
// Comparaison large avec != : $a != $b true  si $a est différent de $b après le transtypage.

echo  1 != true ; // false => donne  chaine de caractere  vide " "   
echo "</br>";
echo  1 != false ; //  true => donne  chaine de caractere "1"   
echo "</br>";
echo  1 != 1; // false => donne  chaine de caractere  vide " "      
echo "</br>";
echo  1 != 0 ; // true => donne  chaine de caractere "1"   
echo "</br>";
echo  1 != -1 ; // true => donne  chaine de caractere "1"   
echo "</br>";
echo  1 != "1" ; // false => donne  chaine de caractere  vide " "    
echo "</br>";
echo  1 != "0"; // true => donne  chaine de caractere "1"   
echo "</br>";
echo  1 != "-1" ; //  true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 != null ; //  true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 != "php" ; //  true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 != "" ; // true => donne  chaine de caractere "1"  
echo "</br>";

//Comparaison stricte avec ===   $a === $b true si $a est égal à $b et qu'ils sont de même type.

echo  1 === true ; // false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 === false ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 === 1; // true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 === 0 ; // false => donne  chaine de caractere vide " "  
echo "</br>";
echo  1 === -1 ; // false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 === "1" ; // false => donne  chaine de caractere  vide " "   
echo "</br>";
echo  1 === "0"; // false => donne  chaine de caractere  vide " "    
echo "</br>";
echo  1 === "-1" ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 === null ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 === "php" ; //  false => donne  chaine de caractere  vide " "  
echo "</br>";
echo  1 === "" ; // false => donne  chaine de caractere vide   " "  
echo "</br>";

//Comparaison stricte avec !==   $a !== $b true  si $a est différent de $b ou bien s'ils ne sont pas du même type.
echo  1 !==  true ; // true => donne  chaine de caractere "1"
echo "</br>";
echo  1 !==  false ;  //true => donne  chaine de caractere "1"
echo "</br>";
echo  1 !==  1; // false => donne  chaine de caractere vide " "   
echo "</br>";
echo  1 !==  0 ;  //true => donne  chaine de caractere "1" 
echo "</br>";
echo  1 !==  -1 ; //true => donne  chaine de caractere "1" 
echo "</br>";
echo  1 !==  "1" ; //true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 !==  "0"; //true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 !==  "-1" ; //true => donne  chaine de caractere "1"
echo "</br>";
echo  1 !==  null ; //true => donne  chaine de caractere "1"  
echo "</br>";
echo  1 !==  "php" ; //true => donne  chaine de caractere "1"
echo "</br>";
echo  1 !==  "" ; //true => donne  chaine de caractere "1"
echo "</br>";












?>