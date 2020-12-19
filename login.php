<?php

//login-validate-par-html

include("./includes/header.php");
require_once("./includes/config.php");
require_once("./includes/library.php");

session_start(); // hadi darori makhassna ndiroha ila bghina nkhadmo bi les session  

if (isAuthenticated()) {
    redirect("admin");
    die();
}

$erreur = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    
    $firstName = htmlspecialchars($_POST["FirstName"]) ?? "";
    $lastName = htmlspecialchars($_POST["LastName"] ) ?? "";
    $email = htmlspecialchars($_POST["Email"])  ?? "";
    $password = htmlspecialchars($_POST["Password"])  ?? "";

    if (authenticate($firstName , $lastName , $email, $password)) {

        $_SESSION["FirstName"] = $firstName; //  les variable session homa les variables li ymkane liya nkhdam bihom fi jami3 les pages 
        $_SESSION["LastName"] = $lastName; 
        $_SESSION["Email"] = $email; 
        $_SESSION["Password"] = $password; 
        redirect("admin");
        die();
    } else {
        $erreur = "  FirstName ou LastName ou Email ou Password  Incorrect ! ";
    }

}


?>

<div class="login-form">
    <form action="" method="POST">
        <h2 class="text-center">Log in</h2>

        <?php if ($erreur != "") { ?>

            <div class="alert alert-danger">
                <?php echo "$erreur"; ?>
            </div>

        <?php } ?>

        <div class="form-group">
            <label for="inputFirstName">FirstName</label>
            <input type="text" name="FirstName"  class="form-control" id="inputFirstName" placeholder="FirstName" required>
        </div>

        <div class="form-group">
            <label for="inputLasttName">LastName</label>
            <input type="text" name="LastName"  class="form-control" id="inputLasttName" placeholder="LastName" required>
        </div>

        <div class="form-group">
            <label for="inputEmail"> Email </label>
            <input type="email" name="Email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>

        <div class="form-group">
            <label for="inputPassword"> Password </label>
            <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>


    </form>
</div>
<?php include("./includes/footer.php")   ?>