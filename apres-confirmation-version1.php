<?php include('./includes/header.php') ; ?>


<?php

$firstName = " ";
$lastName = " ";
$age = " ";


if ( isset($_POST["FirstName"] ) && isset($_POST["LastName"] ) && isset($_POST["Age"] ) ) {
    $firstName = $_POST["FirstName"] ;
    $lastName = $_POST["LastName"] ;
    $age = $_POST["Age"] ;
}


?>


<div>
    <ul style="list-style-type:disc">
       
       <?php if( isset($_POST["FirstName"] ) && isset($_POST["LastName"] ) && isset($_POST["Age"] ) ) { ?>
                    
                    <li>My FirstName is : <?php echo $firstName ; ?> </li>
                    <li>My LastName is : <?php echo $lastName  ; ?> </li>
                    <li>My Age is : <?php echo $age  ; ?> </li>

        <?php } else { ?>
                   
                      <h2><a  href="avant-confirmation-version1.php"> Please Go Back  </a></h2>

              <?php  } ?>
               
    </ul>
</div>



