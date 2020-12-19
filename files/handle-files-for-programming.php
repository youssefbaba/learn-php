
<?php
//handle-files-for-programming

$pathFile1 = "content.txt";
$pathFile2 = "copy1-content.txt";




if (file_exists($pathFile1) && file_exists($pathFile2)) {

  //pour lire la taille Précisé  du  fichier content.txt
  echo "//pour lire la taille Précisé  d'un fichier par exemple dans cette exemple on a choisi la taille complet du fichier content.txt  :  </br> ";
  $handle1 = fopen($pathFile1, "r");
  echo " - " . fread($handle1, filesize($pathFile1)) . "</br>";
  fclose($handle1);

  //pour lire un seul ligne  du  fichier content.txt
  echo "//pour lire un seul ligne  d'un fichier :   </br> ";
  $handle2 = fopen($pathFile1, "r");
  echo  "-" . fgets($handle2) . "</br>";
  fclose($handle2);



  echo "//pour lire un seul ligne  du  fichier content.txt  fi had l7ala 7int 3awadt 7alito  donc ghadi y9ra fichier man lwal  o ghadi ykoune pointer 3la 1 ligne hiya li ghadi yrecupiriha liya  </br> ";
  $handle3 = fopen($pathFile1, "r");
  echo  "-" . fgets($handle3) . "</br>";


  echo "//pour lire un seul ligne  du  fichier content.txt fi had l7ala ma3awadtch 7alito man lwal b9it khdam bi li kan deja ma7loul donc hnaya ghadi ykoune pointer 3la  ligne 2  li hiya li ghadi yrecupiriha liya </br> ";
  echo  "-" . fgets($handle3) . "</br>";



  echo " pour lire  le premiere  caractere   du  fichier content.txt  hnaya khadt   deja fichie content.txt kan deja ma7loul o kan pointer 3la 3'eme ligne donc hnaya ghada nrecupirer 1'ere caractere dyal 3'eme ligne   </br>";
  echo  " - " . fgetc($handle3) . "</br>";
  fclose($handle3);



  echo "// pour lire  le premiere  caractere   du  fichier content.txt hnaya   3awadt 7alit fichier content.txt man lwal donc  ghadi nkoune pointer 3la la ligne 1 donc ghadi nrecupirer 1'ere caractere dyal ligne 1  </br>";
  $handle5 = fopen($pathFile1, "r");
  echo  " - " . fgetc($handle5) . "</br>";
  fclose($handle5);


  echo "//pour lire le fichier copy1-content.txt ligne par ligne en utilisant  boucle while : </br>";
  $handle4 = fopen($pathFile2, "r");
  while (!feof($handle4)) {
    echo "-" . fgets($handle4) . "</br>";
  }
  fclose($handle4);


  echo "// pour lire 1'ere et ecrire ensuite  a la fin du fichier content.txt   </br> ";
  $handle6 = fopen($pathFile1, "a+");
  fwrite($handle6, "\nLa dernière ligne dans ce fichier. ");
  fclose($handle6);
} else {
  echo " file does not exist !  ";
}


?>

