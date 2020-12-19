<?php
//handle-directory

// pour la creation d'un dossier storage et storage1 et storage2   a l'interieur du dossier files  
    
    mkdir("./storage");
    mkdir("./storage1");
    mkdir("./storage2");
    


//pour la creation  d'un dossier storage3 a l'intrieur du dossier storage2 
    mkdir("./storage2/storage3");


//pour la cration  d'un dossier storage4 dans la racine du projet learn-php
    mkdir("../storage4");


//pour la cration d'un fichier index.php  a l'interieur du dossier storage1  qui existe dans le dossier files
    touch("./storage1/index.php");


//pour la creation des fichiers  a l'interieur du dossier storage2  qui existe dans le dossier files
    
    touch("./storage2/index.html");
    touch("./storage2/index.css");
    touch("./storage2/index.txt");
    





//pour la cration des fichiers a l'interieur du dossier storage4  qui existe dans  la racine du projets learn-php
    
    touch("../storage4/index1.php");
    touch("../storage4/index1.html");
    touch("../storage4/index1.css");
    


// pour la suppression d'un dossier  storage  vide qui existe deja dans le dossier dans le dossier files   
    //rmdir("storage");

// pour la suppression d'un dossier  storage1   qui contient un seul  fichier  index.php 
    /* 
    unlink("./storage1/index.php") ;
    rmdir("storage1");
    */ 


// pour la suppression d'un dossier  dossier quelconque vide , plein ........  

    /* 
    function clearDir($dossier) {
        $ouverture=@opendir($dossier);
         if (!$ouverture) return;
         while($fichier=readdir($ouverture)) {
             if ($fichier == '.' || $fichier == '..') continue;
                 if (is_dir($dossier."/".$fichier)) {
                     $r=clearDir($dossier."/".$fichier);
                     if (!$r) return false;
             }
                 else {
                     $r=@unlink($dossier."/".$fichier);
                     if (!$r) return false;
                 }
         }
     closedir($ouverture);
     $r=@rmdir($dossier);
     @rename($dossier,"trash");
     return true;
     }

     clearDir("../storage4") ;  
    */