
<?php  include('./includes/header.php') ;  ?>
<?php

$firstName = "";
$lastName = "";
$age = 0 ;


$firstName = $_GET["firstName"];
$lastName = $_GET["lastName"];
$age = $_GET["age"];

echo " Your FirstName is : $firstName  - Your LastName is : $lastName  - Your age is  : $age ans   "

?>


<?php  include('./includes/main.php') ;  ?>
<?php  include('./includes/footer.php') ;  ?>

