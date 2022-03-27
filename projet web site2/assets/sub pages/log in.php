<?php
session_start();
if(isset($_SESSION['nom'])){
    echo "<script type=\"text/javascript\"> window.location='./../sub pages/home.php' </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <style>
        .card-login {
            margin-top: 130px;
            padding: 18px;
            max-width: 30rem;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="navbar navbar-expand-lg bg-dark navbar-dark text-white ">
        <!-- use fixed-top for fix nav -->
        <div class="container">
            <!-- logo & name site -->
            <a href="./../../index.php" class="navbar-brand">
                <img class="w-50" src="./../image/img svg/mortarboard.svg">
                <span class="fst-italic font-monospace">Edu<span class="text-danger">crowd</span></span>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="./../../index.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="./../../index.php#news" class="nav-link">Latest News</a></li>

                    <!--list drop list formulaire -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filière
                        </a>
                        <ul class="dropdown-menu bg-white" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="./../../index.php#filiere">SMI</a></li>
                            <li><a class="dropdown-item" href="./../../index.php#filiere">SMA</a></li>
                            <li><a class="dropdown-item" href="./../../index.php#filiere">SMP</a></li>
                            <li><a class="dropdown-item" href="./../../index.php#filiere">SMC</a></li>

                        </ul>
                    </li>
                    <li class="nav-item nav-l"><a href="./contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="./about us.php" class="nav-link">About US</a></li>
                    <li class="nav-item"><a href="./log in.php" class="nav-link"><span class="text-primary">Log in</span></a></li>
                    <li class="nav-item"><a href="./sign in.php" class="nav-link"><span class="text-primary">Sign Up</span></a></li>
                </ul>
            </div>

        </div>
    </div>

    <section class=" text-center bg-dark py-3">
        <div class="container w-50 py-3 ">
            <div class="card card-login mx-auto">
                <span class="h3 mt-5 text-dark"> Login Dashboard </span>

                <div class="card-body">

                    <!--form declaration-->
                    <!--./../php/login.php-->
                    <form action="./../php/login.php" method="post" id="formLogin">

                        <!-- user name -->
                        <div class="input-group form-group w-100">
                            <?php if (isset($msg)) {
                                echo $msg;
                            } ?>
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"></path>
                                </svg>
                            </span>
                            <input type="text" name="cne" id="cne" class="form-control" placeholder="CNE" required>
                            <small>
                                <!--message validation -->
                            </small>
                        </div>

                        <!-- password -->
                        <div class="input-group w-100 py-3">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"></path>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>
                            </span>
                            <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de Pass" minlength="8" maxlength="20" required>

                        </div>
                            <div>
                                <!--message validation -->
                                <?php 
                                if(isset($_SESSION['valid']))
                                {
                                    echo $_SESSION['valid'];
                                    session_destroy();
                                    $msg=  '<script type="text/javascript">';
                                    $msg.= 'document.getElementById("erreurmsg").className= "small py-2"'; 
                                    $msg .= '</script>';
                                    echo $msg;
                                    } 
                                ?>
                            </div>
                        <div>
                            <input type="submit" value="Login" class="btn btn-outline-danger float-md-none"  onclick="return validInput()">
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </section>
    <div class="bg-dark" style="height: 20px;">&nbsp;</div>
    <!-- footer -->
    <footer class="py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2021 for Projet Web Devlopment
            </p>
        </div>
    </footer>

    <script src="./../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./../js/validation_login.js"></script>
</body>

</html>