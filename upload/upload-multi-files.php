<?php


   if($_SERVER['REQUEST_METHOD'] === 'POST') {

     foreach($_FILES['Files']['error'] as $key => $error)  {
      
        if($error == UPLOAD_ERR_OK) {

             $source = $_FILES['Files']['tmp_name'][$key];
             $destination = 'images-files/' . $_FILES['Files']['name'][$key];
          
             move_uploaded_file($source, $destination);
        }
     }
     }
    
?>
