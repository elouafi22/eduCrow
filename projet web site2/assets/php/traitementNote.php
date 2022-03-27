<?php

if (!isset($_SESSION['nom']) && !isset($_SESSION['prenom'])) {
   echo "<script type=\"text/javascript\"> window.location='./../../index.php' </script>";
}

$file=fopen("pays.txt","r+");

$table=$_SESSION["note"];

if($table[0]=="1ere annee"){
  $table2=[1+rand()%19,1+rand()%19,1+rand()%19,1+rand()%19,1+rand()%19,1+rand()%19];
}
else
  $table2=[10+rand()%9,10+rand()%9,10+rand()%9,10+rand()%9,10+rand()%9,10+rand()%9];


$put=fputcsv($file,$table2,";");
fclose($file);
