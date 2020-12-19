<?php

include("../includes/header.php");

?>


<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
          <h1>Upload Multi Files</h1>
            <form action="upload-multi-files.php" method="POST" enctype="multipart/form-data">
              <input type="file" name="Files[]"></br></br>
              <input type="file" name="Files[]"></br></br>
              <input type="file" name="Files[]"></br></br>
              <input type="file" name="Files[]"></br></br>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php

include("../includes/footer.php");

?>