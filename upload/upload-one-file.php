<?php

//echo "<pre>" .print_r($_FILES["File"] , true) . "</pre>" ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $source = $_FILES["File"]["tmp_name"];
    $destination = "images-files/" . $_FILES["File"]["name"];

    move_uploaded_file($source, $destination);
}
