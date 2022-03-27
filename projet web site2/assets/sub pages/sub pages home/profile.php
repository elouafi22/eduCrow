<?php
session_start();
if (!isset($_SESSION['nom']) & !isset($_SESSION['prenom'])) {
  header("location:./../../../../index.php");

}

function call_info()
{
  $fichies = fopen("./../../Data/student.csv", "r");
  while ($user = fgetcsv($fichies, 0, ';')) {

    if ($user[0] == $_SESSION['nom'] and $user[1] == $_SESSION['prenom'] and $user[12] == $_SESSION['ID']) {
      $tab1[0] = $user[8]; // filiere  // 0
    
      $tab1[1] = $user[5]; // sexe  //  1
    
      $tab1[2] = 'value ="' . $user[2] . '"'; // cne  // 2
    
      $tab1[3] = 'value ="' . $user[3] . '"'; // cin  // 3
    
      $tab1[4] = 'value ="' . $user[0] . '"'; // nom  // 4
    
      $tab1[5] = 'value ="' . $user[1] . '"'; // prenom  // 5
    
      $tab1[6] = 'value ="' . $user[4] . '"'; // address  // 6
    
      $tab1[7] = 'value ="' . $user[7] . '"'; // city  // 7
    
      $tab1[8] = 'value ="' . $user[6] . '"'; // state // 8


      if (isset($user[13])) { // for call info what is write in textarea
      
        $tab1[9] = $user[13] ; // 9
      }
    }
  }
  fclose($fichies);
  return $tab1;
}


function call_modif()
{

  $fichies = fopen("./../../Data/student.csv", "r");
  while ($user = fgetcsv($fichies, 0, ';')) {
    
    if ($user[0] == $_SESSION['nom'] and $user[1] == $_SESSION['prenom'] and $user[12] == $_SESSION['ID']) {
      $user[0] = htmlspecialchars($_POST['nom']); //0
 
      $user[1] = htmlspecialchars($_POST['prenom']); //1
 
      $user[2] = htmlspecialchars($_POST['cne']); //2
 
      $user[3] = htmlspecialchars($_POST['cin']); //3
 
      $user[4] = htmlspecialchars($_POST['address']); //4
 
      $user[5] = $user[5]; // 5 sexe
 
      $user[6] = htmlspecialchars($_POST['country']); // 6
 
      $user[7] = htmlspecialchars($_POST['city']); // 7
 
      $user[8] = $user[8]; // 8 filiere
 
      $user[9] = $user[9]; // 9 anner 
 
      $user[10] = $user[10]; // 10 password 
 
      $user[11] = $user[11]; // 11 image icon 
 
      $user[12] = $user[12]; // 12 Student ID 


      if (isset($_POST['aboutUser'])) { // for put another info what is write in textarea
        
        $user[13] = htmlspecialchars($_POST['aboutUser']); // 13
      }
    }
    $tab2[] = $user; // for to save data in table
  }
  fclose($fichies);
  // reopen file on mode "w"
  $re_fichies = fopen("./../../Data/student.csv", "w");
  foreach ($tab2 as $line) {
    fputcsv($re_fichies, $line, ";");
  }
}


if (!empty($_POST['nom'])) {
  if (!empty($_POST['nom'])  ) {
    call_modif();
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $table = call_info();
  }
} else {
  // call fonction de info user qui ne modifier pas yet
  $table = call_info();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./../../css/styles.css">
  <style>
    .navbar-dark .navbar-nav .nav-link {
      color: rgba(255,255,255,.55);
    }
    
    #myBtn {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Fixed/sticky position */
      bottom: 20px;
      /* Place the button at the bottom of the page */
      right: 30px;
      /* Place the button 30px from the right */
      z-index: 99;
      /* Make sure it does not overlap */
      border: none;
      /* Remove borders */
      outline: none;
      /* Remove outline */
      cursor: pointer;
      /* Add a mouse pointer on hover */
      padding: 15px;
      /* Some padding */
      border-radius: 40px;
      /* Rounded corners */
      font-size: 18px;
      /* Increase font size */
    }

    #myBtn:hover {
      background-color: #555;
      /* Add a dark-grey background on hover */
    }
  </style>
  <title>My Profile</title>

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


  <!-- Header -->
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(./../../image/image-student-mv2.webp); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white">
            Hello 
            <?php 
              if (isset($_SESSION['prenom']) & isset($_SESSION['nom'])) {
                echo $_SESSION['prenom'];
              } ?> 
            </h1>
          <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your assigned tasks</p>
          <a href="#profile" class="btn btn-info">Edit profile</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2 py-5">
              <div class="card-profile-image ">
                <a href="#">
                  <img src="./../../image/student.png" class="rounded-circle">
                </a>
              </div>
            </div>
          </div>

          <div class="card-body pt-0 pt-md-4">
            <div class="row">
              <div class="col">
                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  <div>&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <h3>
                <?php if (isset($_SESSION['prenom']) & isset($_SESSION['nom'])) {
                  echo $_SESSION['prenom'] . " " . $_SESSION["nom"];
                } ?>
              </h3>
              <div class="h5 font-weight-300">
                <i class="ni location_pin "></i>Student de filiére : <?php echo $table[0]; ?>
                <i class="ni location_pin "></i>\ Sexe : <?php echo $table[1]; ?>
              </div>
              <div class="h5 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Student ID - <?php echo $_SESSION["ID"]; ?>
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>Faculté Polydisciplinaire de SAFI
              </div>
              <hr class="my-4">
              <p>William Butler Yates — "Edudation is no the filling of a pail, but lighting of a fire."</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">My account</h3>
              </div>
            </div>
          </div>
          <div id="profile" class="card-body">

            <!-- formulaire -->

            <form action="" method="post">
              <h6 class="heading-small text-muted mb-4">User information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="cne">CNE OU MASSAR</label>
                      <input type="text" name="cne" id="cne" class="form-control form-control-alternative" placeholder="CNE" <?php echo $table[2]; ?> required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="cin">N°Carte identité</label>
                      <input type="text" name="cin" id="cin" class="form-control form-control-alternative" placeholder="CIN" <?php echo $table[3];  ?> required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="nom">Nom</label>
                      <input type="text" name="nom" id="nom" class="form-control form-control-alternative" placeholder="Nom" <?php echo $table[4];  ?> required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="prenom">prenom</label>
                      <input type="text" name="prenom" id="prenom" class="form-control form-control-alternative" placeholder="prenom" <?php echo $table[5];  ?> required>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Contact information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="address">Address</label>
                      <input name="address" id="address" class="form-control form-control-alternative" placeholder="Home Address" <?php echo $table[6];  ?> type="text" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="city">City</label>
                      <input type="text" name="city" id="city" class="form-control form-control-alternative" placeholder="City" <?php echo $table[7];  ?> required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="input-country">Country</label>
                      <input type="text" name="country" class="form-control form-control-alternative" placeholder="Country" <?php echo $table[8];  ?> required>
                    </div>
                  </div>

                </div>
              </div>
              <hr class="my-4">
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">About me</h6>
              <div class="pl-lg-4">
                <div class="form-group focused">
                  <label>About Me</label>
                  <textarea rows="4" name="aboutUser" class="form-control form-control-alternative" placeholder="A few words about you ..."  ><?php if (isset($table[9]) ) {echo $table[9];}?></textarea>
                </div>
                <input type="submit" value="Edit profile" class="btn btn-info">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- botton for page up -->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
    </svg>
  </button>
  <!-- footer -->
  <footer class="py-3 bg-dark text-white text-center position-relative">
    <div class="container">
      <p class="lead">
        Copyright &copy; 2021 for Projet Web Devlopment
      </p>
    </div>
  </footer>

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <script src="./../../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>