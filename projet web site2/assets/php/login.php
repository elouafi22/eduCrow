
<?php
session_start();

if (isset($_POST['cne']) and isset($_POST['mdp'])) {
    $fichier = fopen("./../Data/student.csv", "r");
    while ($ligne = fgetcsv($fichier, 0, ";")) {

        if ($ligne[2] == $_POST['cne'] and password_verify($_POST["mdp"],$ligne[10]) ) {
 
            // Set session variables
            $_SESSION['nom'] = $ligne[0];
            $_SESSION['prenom'] = $ligne[1];
            $_SESSION['imageLogo'] = $ligne[11];
            $_SESSION['filiere'] = $ligne[8];
            $_SESSION['years'] = htmlspecialchars($ligne[9]);
            $_SESSION['ID'] = $ligne[12];
            $_SESSION["information"]=$ligne;

            fclose($fichier);
            echo "<script type=\"text/javascript\"> window.location='./../sub pages/home.php' </script>";
        }
    }


    fclose($fichier);
    $_SESSION['valid']='Votre login et / ou mot de passe incorrect';
    echo "<script type=\"text/javascript\"> window.location='./../sub pages/log in.php' </script>";

}
?>
