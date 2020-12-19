<?php
//copy-rename-delete-file


$path1 = "content.txt";


if (file_exists($path1) ) {
  
    // pour lire et afficher le contenu de le fichier content.txt
    $phrases1 = readfile($path1) ;
    echo  $phrases1 ;
    echo " </br>" ;

}else {
    echo " files does not exist ! " ;
}

 // copy file : copy(source , destination)
copy($path1 ,"copy1-content.txt") ;
copy($path1 ,"copy2-content.txt") ;
copy($path1 ,"copy3-content.txt") ;

// pour lire et afficher le contenu de la fichier copy1-content.txt
$path2 = "copy1-content.txt" ;
$phrases2 = readfile($path2);
echo  $phrases2 ;

// rename file  copy2-content.txt =>  rename-copy2-content.txt
rename("copy2-content.txt" ,"rename-copy2-content.txt") ;


//delete file   copy3-content.txt
unlink("copy3-content.txt") ;



?>


