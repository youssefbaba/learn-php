<?php

include("../includes/header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
          <h2>Upload One File</h2>
            <form action="upload-one-file.php" method="POST" enctype="multipart/form-data">
              <input type="file" name="File" >
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php

include("../includes/footer.php");

?>

