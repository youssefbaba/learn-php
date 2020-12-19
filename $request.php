<?php include('./includes/header.php') ?>

<?php

$firstName = " ";
$lastName = " ";
$age = " ";


// if ($_SERVER["REQUEST_METHOD"] === "POST" || $_SERVER["REQUEST_METHOD"] === "GET" ) {
    
//     $firstName = $_REQUEST["FirstName"];
//     $lastName = $_REQUEST["LastName"];
//     $age = $_REQUEST["Age"];

// }


//$_REQUEST : le role dyalha hiya ila ssayfat bi get ola post li kan mohim  ghada tssta9bal liya l'information 

if ( in_array($_SERVER["REQUEST_METHOD"] , ["POST" ,"GET"]) ) { // fi hadak array  $_SERVER["REQUEST_METHOD"]  ila kant fih GET ola POST return True
    
    $firstName = $_REQUEST["FirstName"];
    $lastName = $_REQUEST["LastName"];
    $age = $_REQUEST["Age"];

}


?>

<form action="" method="POST">
    <div class="form-group">
        <label for="inputFirstName">FirstName</label>
        <input type="text" name="FirstName" class="form-control" id="inputFirstName" placeholder="First Name " required>
    </div>
    <div class="form-group">
        <label for="inputLastName">LastName</label>
        <input type="text" name="LastName" class="form-control" id="inputLastName" placeholder="Last Name" required>
    </div>
    <div class="form-group">
        <label for="inputAge">Age</label>
        <input type="text" name="Age" class="form-control" id=inputAge placeholder="Age" required>
    </div>

    <button type="submit" class="btn btn-primary"> CREATE </button></br>
</form>

<div>
    <ul style="list-style-type:disc">
        <?php if( in_array($_SERVER["REQUEST_METHOD"] , ["POST" ,"GET"]) )  { ?>
            <li>My FirstName is : <?php echo $firstName ?> </li>
            <li>My LastName is : <?php echo $lastName ?> </li>
            <li>My Age is : <?php echo $age ?> </li>
               
        <?php } ?> 
    </ul>
</div>

<?php include('./includes/main.php') ?>
<?php include('./includes/footer.php') ?>