<?php
session_start();
if (!isset($_SESSION['nom']) & !isset($_SESSION['prenom'])) {
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
  <style>
      .imagecontact{
      background: url(./../../image/pexels-lumn-1410226.jpg) no-repeat ;
      
    }
  </style>

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
          <li class="nav-item"> <a href="./profile.php"> <?php echo $_SESSION['imageLogo']; ?> </a> </li>
          <li class="nav-item"><a href="./../../php/log out.php" class="nav-link"><span class="text-primary">Log out</span></a></li>
        </ul>
      </div>

    </div>
  </div>

  <section class="text-center py-4 imagecontact">
    <div class="container">
      <div class="h1">About Us</div>
      <div class="lead">
        <p>Bienvenue sur notre site Web éducatif, qui a été créé par un groupe d'étudiants dans le but de faciliter la communication entre les étudiants et le service des affaires éstudiantines dans tout ce qui concerne :</p>
        <p>*Retraits des certificats de scolarité.</p>
        <p>*Retraits des relevés de notes.</p>
        <p>*Retraits des attestatios de réussite.</p>
      </div>
    </div>
  </section>

  <section id="news" class="py-5">
        <div class="container">
            <div class="h1 text-center">Our Team</div>
            <div style="height: 10%;"><hr></div>
            <div class="row text-center py-5">
                <div class="col-md">
                  <div class="card bg-dark text-light mb-3">
                        <img  src="./../../image/SAVE_20211108_191859edit.jpg" alt="card-image" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class="card-title">Hicham Bchina</h4>
                            <div>Étudiant en SMI</div>
                            <div>&nbsp;</div>
                            <a href="mailto:hicham@exemple.com"><button class="btn btn-info">Contact</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light mb-3">
                        <img src="./../../image/IMG-20220119-WA0000edit.jpg" alt="card-image" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class="card-title">Mohammed El-ouafi</h4>
                            <div class="">Étudiant en SMI</div>
                            <div>&nbsp;</div>
                            <a href="mailto:Mohammed@exemple.com"><button class="btn btn-info">Contact</button></a>
                        </div>
                    </div>
                </div>  

            </div>

            <div class="row text-center py-5">
                <div class="col-md">
                  <div class="card bg-dark text-light mb-3">
                  <img src="./../../image/IMG-20220119-WA0004.jpg" alt="card-image" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class="card-title">Nabil Ettihadi</h4>
                            <div class="">Étudiant en SMI</div>
                            <div>&nbsp;</div>
                            <a href="mailto:Nabil@exemple.com"><button class="btn btn-info">Contact</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light mb-3">
                        <img src="./../../image/IMG-20220119-WA0002(1).jpg" alt="card-image" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class="card-title">Rabii Lfarakh</h4>
                            <div class="">Étudiant en SMI</div>
                            <div>&nbsp;</div>
                            <a href="mailto:Nabil@exemple.com"><button class="btn btn-info">Contact</button></a>
                        </div>
                    </div>
                </div>  

            </div>

        </div>

    </section>

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