<?php 

//admin-pour-login-validate-html

include("./includes/header.php") ;  
require_once("./includes/config.php");
require_once("./includes/library.php");
session_start();

ensureUserIsAuthenticated(); // il kan n'est pas authentifie khasso  yb9a fi page login 


?>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <h1> Admin Panel </h1>
      <p> Your FirstName is : <?php echo   $_SESSION["FirstName"]   ;  ?>          </p>
      <p> Your LastName is :  <?php echo   $_SESSION["LastName"]   ;  ?>      </p>
      <p> Your Email is : <?php echo   $_SESSION["Email"]   ;  ?> </p>
    </div>
  </div>
</div>




<?php include("./includes/footer.php") ;  ?>