<?php
session_start();
if (!isset($_SESSION['nom']) & !isset($_SESSION['prenom'])) {
    echo "<script type=\"text/javascript\"> window.location='./../../index.php' </script>";
}

//////////////////////////////////////////////////////////////


if(!empty($_POST["demande"])){
    include './../php/traitementDemande.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../css/styles.css">

    <title>Formulaire</title>
    <style>
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .55);
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
</head>

<body>

    <div class="navbar navbar-expand-lg bg-dark navbar-dark text-white ">
        <!-- use fixed-top for fix nav -->
        <div class="container">
            <!-- logo & name site -->
            <a href="./home.php" class="navbar-brand">
                <img class="w-50" src="./../image/img svg/mortarboard.svg">
                <span class="fst-italic font-monospace">Edu<span class="text-danger">crowd</span></span>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="./home.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="./home.php#news" class="nav-link">Latest News</a></li>

                    <!--list drop list formulaire -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filière
                        </a>
                        <ul class="dropdown-menu bg-white" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="./home.php#filiere">SMI</a></li>
                            <li><a class="dropdown-item" href="./home.php#filiere">SMA</a></li>
                            <li><a class="dropdown-item" href="./home.php#filiere">SMP</a></li>
                            <li><a class="dropdown-item" href="./home.php#filiere">SMC</a></li>

                        </ul>
                    </li>
                    <li class="nav-item nav-l"><a href="./formulaire.php" class="nav-link">Formulaire</a></li>
                    <li class="nav-item nav-l"><a href="./sub pages home/contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="./sub pages home/about us.php" class="nav-link">About US</a></li>
                    <li class="nav-item"> <a href="./sub pages home/profile.php"> <?php echo $_SESSION['imageLogo']; ?> </a> </li>
                    <li class="nav-item"><a href="./../php/log out.php" class="nav-link"><span class="text-primary">Log out</span></a></li>
                </ul>
            </div>

        </div>
    </div>



    <nav class="py-5 container" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulaire</li>
        </ol>
    </nav>

    <section class="py-4">
        <div class="container">
            <form action="" method="post">
                <h6 class="heading-small text-muted mb-4">Demande Certificat</h6>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group focused">
                            <div class="heading-small text-muted mb-4">Documents <span style="color: red;">*</span> </div> <br>
                            <input type="radio" name="demande" value="Attestation de réussite"> <label>Attestation de réussite</label> <br>
                            <input type="radio" name="demande" value="Certificat de scolarite"> <label>Certificat de scolarité</label> <br>
                            <br><br>
                            <?php if ($_SESSION['years'] === "1ere annee") { ?>

                                <input type="radio" name="demande" value="Relevés de notes de 1ère année"> <label>Relevés de notes de 1ère année</label> <br>

                            <?php } elseif ($_SESSION['years'] === "2eme annee") {  ?>
                                <div for="demande" class="heading-small text-muted mb-4">Dans le cas de la demande des relevés des notes: <span style="color: red;">*</span></div> <br>

                                <input type="radio" value="note 1ere annee" name="demande"> <label>1ere année</label> <br>
                                <input type="radio" value="note 2eme annee" name="demande"> <label>2ème année</label> <br>

                            <?php } elseif ($_SESSION['years'] === "3eme annee") { ?>
                                <div for="demande">Dans le cas de la demande des relevés des notes: <span style="color: red;">*</span></div> <br>

                                <input type="radio" value="note 1ere annee" name="demande"> <label>1ere année</label> <br>
                                <input type="radio" value="note 2eme annee" name="demande"> <label>2ème année</label> <br>
                                <input type="radio" value="note 3eme annee" name="demande"> <label>3ème année</label> <br>


                            <?php } elseif ($_SESSION['years'] === "4eme annee") { ?>
                                <div for="demande">Dans le cas de la demande des relevés des notes: <span style="color: red;">*</span></div> <br>

                                <input type="radio" value="note 1ere annee" name="demande"> <label>1ere année</label> <br>
                                <input type="radio" value="note 2eme annee" name="demande"> <label>2ème année</label> <br>
                                <input type="radio" value="note 3eme annee" name="demande"> <label>2ème année</label> <br>
                                <input type="radio" value="note 4eme annee" name="demande"> <label>4ème année</label> <br>

                            <?php } elseif ($_SESSION['years'] === "5eme annee") { ?>
                                <div for="demande">Dans le cas de la demande des relevés des notes: <span style="color: red;">*</span></div> <br>

                                <input type="radio" value="note 1ere annee" name="demande"> <label>1ere année</label> <br>
                                <input type="radio" value="note 2eme annee" name="demande"> <label>2ème année</label> <br>
                                <input type="radio" value="note 3eme annee" name="demande"> <label>3ème année</label> <br>
                                <input type="radio" value="note 4eme annee" name="demande"> <label>4ème année</label> <br>
                                <input type="radio" value="note 5eme annee" name="demande"> <label>5ème année</label> <br>

                            <?php } elseif ($_SESSION['years'] === "6eme annee") { ?>
                                <div for="demande">Dans le cas de la demande des relevés des notes: <span style="color: red;">*</span></div> <br>

                                <input type="radio" value="note 1ere annee" name="demande"> <label>1ere année</label> <br>
                                <input type="radio" value="note 2eme annee" name="demande"> <label>2ème année</label> <br>
                                <input type="radio" value="note 3eme annee" name="demande"> <label>3ème année</label> <br>
                                <input type="radio" value="note 4eme annee" name="demande"> <label>4ème année</label> <br>
                                <input type="radio" value="note 5eme annee" name="demande"> <label>5ème année</label> <br>
                                <input type="radio" value="note 6eme annee" name="demande"> <label>6ème année</label> <br>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <img src="./../image/img svg/undraw_certificate_re_yadi.svg" alt="">
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <div class="row pl-lg-4 form-group pb-5 pt-2">
                    <input type="submit" value="Demande Formulaire" class="btn btn-info">
                </div>

            </form>

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


    <script src="./../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>