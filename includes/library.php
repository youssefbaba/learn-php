<?php


function authenticate( $firstName , $lastName ,  $email , $password ) // cette fonction pour la verification de l'enthentification 
{
    return ( $firstName == FIRSTNAME && $lastName == LASTNAME  && $email == EMAIL && $password ==  PASSWORD ) ; // return true or false 

}

function redirect($page) // cettefonction pour la rederection entre les pages 
{
    header("Location: $page.php ") ; 
}
function isAuthenticated()
{
    return  ( isset($_SESSION["FirstName"] )  && isset( $_SESSION["LastName"] )  && isset($_SESSION["Email"]) && isset($_SESSION["Password"]))  ;
}

function ensureUserIsAuthenticated()
{
    if(!isAuthenticated()){

        redirect("login-validate-par-html");
        die();
    }
   
}





		        
        
        


    
 
?>