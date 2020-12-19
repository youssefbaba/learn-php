<?php 

//apres-confirmation-version2

include('./includes/header.php') ; 

?>


<?php


$firstName = " ";
$lastName = " ";
$age = " ";




if ( $_SERVER["REQUEST_METHOD"] === "POST" ) { // ila kant  la methode li ssayfat biha requete hiya post 
    
    $firstName = htmlspecialchars($_POST["FirstName"])  ;
    $lastName = htmlspecialchars( $_POST["LastName"] ) ;
    $age = htmlspecialchars($_POST["Age"]) ;
}


?>


<div>
    <ul style="list-style-type:disc">
       
       <?php if($_SERVER["REQUEST_METHOD"] === "POST") { ?>
                    
                    <li>My FirstName is : <?php echo $firstName ; ?> </li>
                    <li>My LastName is : <?php echo $lastName  ; ?> </li>
                    <li>My Age is : <?php echo $age  ; ?> </li>

        <?php } else { ?>
                   
                      <h2><a  href="avant-confirmation-version2.php"> Please Go Back  </a></h2>

              <?php  } ?>
               
    </ul>
</div>



