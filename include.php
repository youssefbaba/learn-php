<?php

include('./includes/calculator.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul style="list-style-type:square">
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
    <li>addition du 4 et 2 (4+2) egale : <?php echo addition(4,2) ;?></li>
    <li>soustraction du 4 et 2 (4-2) egale : <?php echo substration(4,2) ;?></li>
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
    <li>multiplication du 4 et 2 (4*2) egale : <?php echo mulitiplication(4,2) ;?></li>
    <li>devision du 4 et 2 (4/2) egale : <?php echo division (4,2) ;?></li>
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
    <?php include('./includes/content.php') ;?>
</ul>

</body>
</html>