<?php
session_start();
if(!isset($_SESSION['nom']) & !isset($_SESSION['prenom'])){
    echo "<script type=\"text/javascript\"> window.location='./../../../index.php' </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Contact us</title>

</head>

<body>

    <div class="navbar navbar-expand-lg bg-dark navbar-dark text-white ">
        <!-- use fixed-top for fix nav -->
        <div class="container">
            <!-- logo & name site -->
            <a href="./../home.php" class="navbar-brand">
                <img class="w-50" src="./../../image/img svg/mortarboard.svg">
                <span class="fst-italic font-monospace">Edu<span class="text-danger">crowd</span></span>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="./../home.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="./../home.php#news" class="nav-link">Latest News</a></li>

                    <!--list drop list formulaire -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filière
                        </a>
                        <ul class="dropdown-menu bg-white" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="./../home.php#filiere">SMI</a></li>
                            <li><a class="dropdown-item" href="./../home.php#filiere">SMA</a></li>
                            <li><a class="dropdown-item" href="./../home.php#filiere">SMP</a></li>
                            <li><a class="dropdown-item" href="./../home.php#filiere">SMC</a></li>

                        </ul>
                    </li>
                    <li class="nav-item nav-l"><a href="./../formulaire.php" class="nav-link">Formulaire</a></li>
                    <li class="nav-item nav-l"><a href="./contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="./about us.php" class="nav-link">About US</a></li>
                    <li class="nav-item"> <a href="./profile.php"> <?php  echo $_SESSION['imageLogo']; ?>  </a> </li>
                    <li class="nav-item"><a href="./../../php/log out.php" class="nav-link"><span class="text-primary">Log out</span></a></li>
                </ul>
            </div>

        </div>
    </div>
    

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./../home.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_POST["nom"]) && isset($_POST["message"]) && isset($_POST["email"])){

        $fichier = fopen("../Data/contact.csv","a+");
       
       $table[]=htmlspecialchars($_POST["nom"]);
       $table[]=htmlspecialchars($_POST["email"]);
       $table[]=htmlspecialchars($_POST["message"]);
       
       
       fputcsv($fichier,$table,";");
       fclose($fichier);
       
       
        $msg = "<div class=\"container\">votre message est send "; 
        $msg .= '<svg xmlns="http://www.w3.org/2000/svg" style="color: green;" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">';
        $msg .= '<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>';
        $msg .= '<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>';
        $msg .= '</svg></div>';

        echo $msg;
    } 
    ?>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <img src="./../../bootstrap-5.1.3-dist/bootstrap-icons-1.7.2/envelope-fill.svg" alt="" srcset=""> Contact us.
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div>
                                <label for="name">Name</label>
                                <input name="nom" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter name" required>
                            </div>
                            <div>
                                <label for="email">Email address</label>
                                <input 
                                    name="email" 
                                    type="email" class="form-control" 
                                    aria-describedby="emailHelp" 
                                    placeholder="Enter email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                                    required >
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div>
                                <label for="message">Message</label>
                                <textarea name="message" class="form-control" rows="6" minlength="10" required></textarea>
                            </div>
                            <div class="mx-auto py-2">
                            <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i>
                        <img src="./../../bootstrap-5.1.3-dist/bootstrap-icons-1.7.2/house-door-fill.svg" alt=""> Address
                    </div>
                    <div class="card-body">
                        <p>Sidi Bouzid, B.P. 4162, 46000 SAFI - MAROC </p>
                        <p>Faculté Polydisciplinaire de SAFI</p>
                        <p>Maroc</p>
                        <p>Email : email@educrowd.com</p>
                        <p>Tel. +212 67 46 43 67 91</p>
    
                    </div>
    
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="py-3 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2021 for Projet Web Devlopment
            </p>
        </div>
    </footer>

    <script src="./../../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>