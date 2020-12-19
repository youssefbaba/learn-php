<?php

include('./includes/header.php') ;

?>

<div class="login-form">
    <form action="" method="POST">
        <h2 class="text-center">Log in</h2>
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

<?php

include( "./includes/footer.php") ;

?>