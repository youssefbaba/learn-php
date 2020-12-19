<?php 

//avant-confirmation-version2

include('./includes/header.php') ; 

?>

<div class="login-form">
    <form action="apres-confirmation-version2.php" method="POST">
      

        <div class="form-group">
            <label for="inputFirstName">FirstName</label>
            <input type="text" name="FirstName"  class="form-control" id="inputFirstName" placeholder="FirstName" required>
        </div>

        <div class="form-group">
            <label for="inputLasttName">LastName</label>
            <input type="text" name="LastName"  class="form-control" id="inputLasttName" placeholder="LastName" required>
        </div>
        <div class="form-group">
            <label for="inputAge">Age</label>
            <input type="text" name="Age" class="form-control" id="inputAge" placeholder="Age" required >
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> CREATE </button>
        </div>


    </form>
</div>

<?php include('./includes/footer.php') ?>