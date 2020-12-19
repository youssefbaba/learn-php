<?php
// si on parle sur scope en parle sur la visibilte de la variable dans un endroit 
// local scope hiya wa7ad variable Définie  sauf sur un endroit précise {...} ola argument dyal une fonction 
$name = "Reda";

function saySalam($age)
{
    $name = "Youssef";
    echo " My Name is :  $name  </br> My Age is  : $age  </br>" ;
}

saySalam(24);
echo "Salam $name" ;
 //echo $name ; la variable name est localscope 
//echo $age ; la variable age est localscope


?>