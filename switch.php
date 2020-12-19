<?php 
// en utilise switch pour la comparaison d'egalite 
$compteur = 1 ;
$fruit = "apple";
// on utilisant elseif 
if ($compteur == 2) {
    echo " compteur egal =  2  </br> " ;
}elseif ($compteur == 3) {
     echo " compteur egal = 3 </br> " ;
}elseif ($compteur == 4 ) {
    echo " compteur egal  = 4 </br> " ;
}elseif ($compteur == 10) {
    echo " compteur egal  = 10 </br> " ;
}
else {
    echo " pas de correspondance </br> " ;
}

// on utilisant switch par entier

switch ($compteur) {
    case 1 :
        echo " compteur egal = 1  </br> " ;
        break;
    case 6 :
        echo " compteur egal = 6  </br> " ;
        break;
    case 10 :
        echo " compteur egal  = 10 </br>  " ;
        break;            
    default:
        echo " pas de correspondance  </br> " ;
        break;
}

// on utilisant switch par String
switch ($fruit) {
    case "apple" :
        echo " fruit  est une pomme </br> " ;
        break; // khroj man boucle 
    case  "bar":
        echo " fruit  est une barre </br> " ;
        break;
    case "cake" :
        echo " fruit  est une gateau  </br>  " ;
        break;            
    default:
        echo " pas de correspondance </br> " ;
        break;
}

// -1 feu rouge
// 0  feu orange 
// 1 feu vert 
$panneauRoutiere  = 80 ;

// panneauRoutiere par elseif
if ($panneauRoutiere == 0) {
    echo " Feu Orange </br> " ;
}elseif ($panneauRoutiere == 1) {
     echo " Feu Vert </br> " ;
}elseif ($panneauRoutiere == -1 ) {
    echo " Feu Rouge  </br> " ;
}else{
    echo " pas de correspondance merci de choisir un  numero parmi eux -1 , 0 , 1  ! </br> " ;
}

// panneauRoutiere par switch
switch ($panneauRoutiere) {
    case 0 :
        echo " Feu Orange  </br> " ;
        break;
    case -1 :
        echo " Feu Rouge  </br> " ;
        break;
    case 1 :
        echo " Feu Vert  </br>  " ;
        break;            
    default:
        echo " pas de correspondance merci de choisir un  numero parmi eux -1 , 0 , 1  ! </br> " ;
        break;
}

$numero = 3 ;

switch ($numero) {
    case 0:
    case 1:
    case 2:
        echo "  le numero  est plus petit que 3 mais n'est pas négatif </br>" ;
        break;
    case 3:
        echo "  le numero est : 3 </br>" ;
        break;
    default:
        echo "pas de correspondance  </br>" ;
        break;
}

$car = "Fiat" ;
switch($car)
{
    case "Dacia";
    case "Fiat";
    case "Opel";
        echo "Bon choix";
    break;
    default;
        echo "Merci de faire un choix...";
    break;
}











?>