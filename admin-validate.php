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
      <h1> Admin Panel Validate </h1>
      <p> Your FirstName is : <?php echo   $_SESSION["FirstName"]   ;  ?>          </p>
      <p> Your LastName is :  <?php echo   $_SESSION["LastName"]   ;  ?>      </p>
      <p> Your Email is : <?php echo   $_SESSION["Email"]   ;  ?> </p>
    </div>
  </div>
</div>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <br>
      <a href="logout-validate.php">Logout Validate</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
   
  </div>
</footer>


    <script src="assets/js/bootstrap.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      
  </body>
</html>


