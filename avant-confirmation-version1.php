<?php include('./includes/header.php') ; ?>


<?php

$firstName = " ";
$lastName = " ";
$age = " ";

if ( isset($_POST["FirstName"]) && isset($_POST["LastName"]) && isset($_POST["Age"] )  ) {
    $firstName = $_POST["FirstName"] ;
    $lastName = $_POST["LastName"] ;
    $age= $_POST["Age"] ;
}

?>


<form action="apres-confirmation-version1.php" method="POST">
    <div class="form-group">
        <label for="inputFirstName">FirstName</label>
        <input type="text" name="FirstName" class="form-control" id="inputFirstName" placeholder="First Name ">
    </div>
    <div class="form-group">
        <label for="inputLastName">LastName</label>
        <input type="text" name="LastName" class="form-control" id="inputLastName" placeholder="Last Name">
    </div>
    <div class="form-group">
        <label for="inputAge">Age</label>
        <input type="text" name="Age" class="form-control" id=inputAge placeholder="Age">
    </div>

    <button type="submit" class="btn btn-primary"> CREATE </button></br>
</form>

<?php include('./includes/main.php') ?>
<?php include('./includes/footer.php') ?>