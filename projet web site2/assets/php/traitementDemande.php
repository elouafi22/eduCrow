<?php
   session_start();
   if (!isset($_SESSION['nom']) && !isset($_SESSION['prenom'])) {
      echo "<script type=\"text/javascript\"> window.location='./../../index.php' </script>";
   }
   ////////////////////////////////////////////////////////////////////////////////////////////////////////      

    $f=fopen("./../Data/taitement.csv","a+");
    $demande1=$_POST["demande"];
    ///////////input annee et la filiere ///////////////
    $ann1=$_SESSION['years'];
    $filiere=$_SESSION['filiere'];
    $tab2=[$demande1,$ann1];
    //////////// cette session pour la page traitementNote////////////////
    $tab3=[$ann1,$filiere,$demande1];
      $_SESSION["note"]=$tab3;
   ////////////////////////////////////////////////////////////////////
    $put=fputcsv($f,$tab2,";");
    fclose($f);

    if($demande1==="Attestation de réussite"){
       header('location:./../php/attestation.php'); 
    } elseif($demande1==="Certificat de scolarite"){
        header('location:./../php/certifica.php'); 
    } elseif($demande1==="note 1ere annee" ){
       header('location:./../php/note.php');
    }elseif($demande1==="note 2eme annee" ){
        header('location:./../php/note.php');
     }elseif($demande1==="note 3eme annee" ){
        header('location:./../php/note.php');
     }elseif($demande1==="note 4eme annee" ){
        header('location:./../php/note.php');
     }elseif($demande1==="note 5eme annee" ){
        header('location:./../php/note.php');
     }elseif($demande1==="note 6eme annee" ){
        header('location:./../php/note.php');
     }

    


