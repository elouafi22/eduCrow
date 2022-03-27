<?php
session_start();
if(!isset($_SESSION['nom']) & !isset($_SESSION['prenom'])){
    echo "<script type=\"text/javascript\"> window.location='./../../index.php' </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Home</title>
    <style>
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
            <a href="./../../index.html" class="navbar-brand">
                <img class="w-50" src="./../image/img svg/mortarboard.svg">
                <span class="fst-italic font-monospace">Edu<span class="text-danger">crowd</span></span>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="./home.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="#news" class="nav-link">Latest News</a></li>

                    <!--list drop list formulaire -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filière
                        </a>
                        <ul class="dropdown-menu bg-white" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#filiere">SMI</a></li>
                            <li><a class="dropdown-item" href="#filiere">SMA</a></li>
                            <li><a class="dropdown-item" href="#filiere">SMP</a></li>
                            <li><a class="dropdown-item" href="#filiere">SMC</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-l"><a href="./formulaire.php" class="nav-link">Formulaire</a></li>
                    <li class="nav-item nav-l"><a href="./sub pages home/contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="./sub pages home/about us.php" class="nav-link">About US</a></li>
                    <li class="nav-item"> <a href="./sub pages home/profile.php"> <?php  echo $_SESSION['imageLogo']; ?>  </a></li>
                    <li class="nav-item"><a href="./../php/log out.php" class="nav-link"><span class="text-primary">Log out</span></a></li>
                </ul>
            </div>

        </div>
    </div>

    
    <!-- body -->
    <section class="bg-dark text-light text-center text-lg-start py-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <div>
                    <h1>Back<span class="text-primary"> to School</span></h1>
                    <p class="h4">Welcome to all of our students</p>
                    <p class="py-1 lead">We do everything to ensure the health, safety and well-being of our students and employees. Additional information can be found here</p>
                    <p class="h4">Welcome Back
                        <span class="text-success h4"> 
                        <?php if (isset($_SESSION['prenom']) & isset($_SESSION['nom'])) {echo $_SESSION['prenom'] . " " . $_SESSION["nom"];} ?>
    </span>
                    </p>
                    <a href="./sub pages home/profile.php"><button class="btn btn-info">Your profile</button></a>
                </div>
                <img class="d-none d-md-block img-fluid w-100" src="./../image/img svg/undraw_certification_aif8.svg" alt="hero">
            </div>
        </div>
    </section>

    <section id="news" class="py-5">
        <div class="container">
            <div class="h1 text-center">LATEST NEWS</div>
            <div class="row text-center py-5">
                <div class="col-md">
                    <div class="card bg-dark text-light mb-3">
                        <img src="./../image/card-img1.webp" alt="card-image" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class="card-title">Learning at Home Effectively</h4>
                            <a href="#learnhome"><button class="btn btn-info">Learn more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light mb-3">
                        <img src="./../image/card-img2.webp" alt="card-image" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class="card-title">Get to Know Your Teachers</h4>
                            <a href="#filiere"><button class="btn btn-info">Learn more</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light mb-3">
                        <img src="./../image/card-img3.webp" alt="card-image" class="card-img-top">
                        <div class="card-body text-center">
                            <h4 class="card-title">The New Safety Regulations</h4>
                            <a href="#safty"><button class="btn btn-info">Learn more</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



        
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-md-center">
                <div class="col-md">
                    <img src="./../image/img svg/undraw_online_learning_re_qw08.svg" alt="learn" class="img-fluid">
                </div>
                <div class="col-md py-4">

                    <div id="learnhome" class="h1 py-4 ">Learning at Home Effectively </div>

                    <div class="lead">
                        <p>Studying at home has its perks: it’s a comfortable, low-pressure environment. However, there are a few reasons it can be difficult to study at home; with so many distractions, it’s easy to procrastinate—when you do start, it’s easy to get off track.</p>
                        <p>At home, procrastination and distraction can prevent you from accomplishing what you need to get done. Watching TV, taking a nap, scrolling through social media, or other activities (maybe even cleaning your room!), are big productivity killers that take you away from your goal of studying for or completing that assignment.</p>
                        <p>Fortunately, there are a few tricks you can use to help you be more productive. <strong>Here are 8 ways to help you stay focused and get more done when studying at home.</strong></p>
                    </div>
                </div>

            </div>

            <div class=" py-4">
                <hr />

                <h2 class="h3 py-3">8 Tips For Studying At Home Effectively</h2>

                <div class="accordion" id="studyAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. Try Active Studying
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#studyAccordion">
                            <div class="accordion-body lead">
                                Active studying is as simple as asking questions before, during, and after study time. Not only does this help to give your study session direction, but it also helps keep you on track and reflect on how to improve for your next study session!
                                Questions to ask yourself before you study :
                                <ul>
                                    <li>What am I about to learn?</li>
                                    <li>What do I already know about this subject?</li>
                                </ul>
                                <p>Questions to ask yourself while you study:</p>
                                <ul>
                                    <li>How does this information fit into a bigger picture?</li>
                                    <li>Do I understand what I have just read?</li>
                                    <li>Can I paraphrase it?</li>
                                    <li>Are there any key words or ideas that I need to write down? Why are these words and ideas important?</li>
                                </ul>
                                <p>Questions to ask yourself after you study:</p>
                                <ul>
                                    <li>What can I take away from this study session?</li>
                                    <li>What do I need to review or learn next time?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Get A Good Night’s Sleep
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#studyAccordion">
                            <div class="accordion-body lead">
                                <p>Students of all ages should get at least eight hours of sleep every school night. It’s the best way to ensure that the brain is refreshed and ready to process all of the information learned during the day. It may be tempting to stay up late to cram, but it’s more beneficial to get enough rest.</p>
                                <p>A full night’s sleep is especially important the night before a test—a good night’s sleep makes you more alert and improves memory for test material, leading to better test results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. Study At The Right Time
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#studyAccordion">
                            <div class="accordion-body">
                                <p>Every student has his or her own daily highs and lows. Some people are <a href="https://www.oxfordlearning.com/best-time-day-to-study/">night owls while some people prefer the morning.</a> Take advantage of the time of the day you feel most productive, and don’t try to force yourself to study when your brainpower isn’t at its peak. Try to study when you are most alert, so you are able to process and retain the information that you are studying.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                4. Have A Designated Study Area
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#studyAccordion">
                            <div class="accordion-body">
                                <p>Whether it’s the kitchen table or the desk in your bedroom, create an area to study that is a designated study zone. Try to reserve your bed for sleeping and avoid studying in it (it can be all too easy to take a nap!). Most importantly, keep your study space clean and organized so you can put more time into studying (and less trying to find a pen that works).</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                5. Eat Properly
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#studyAccordion">
                            <div class="accordion-body">
                                <p>Don’t forget to eat! Your body (and your brain) needs fuel to help stay in top form. Plus, it’s difficult to focus when your stomach is growling. Have healthy snacks while you study, but make sure they’re prepared in advance so you don’t spend too much time away from your work. More time away means more opportunity to be distracted!</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                                6. Get Chores Out Of The Way
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#studyAccordion">
                            <div class="accordion-body">
                                <p>Take care of daily chores before starting your study session to avoid interruption, or being distracted by an unfinished to-do list. Getting chores out of the way makes it much easier to focus on the task at hand. Plus, you can look forward to relaxing when your study time is done rather than dreading the chores that need to be completed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                7. Create A Timetable
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#studyAccordion">
                            <div class="accordion-body">
                                <p><a href="https://1en5vh48t4rqdnq1j3h9ihn4-wpengine.netdna-ssl.com/wp-content/uploads/2015/02/Master-Schedule.pdf">Creating a timetable</a> helps organize your time, schedules your breaks, and is especially useful when you have multiple subjects to study. Write your schedule down so you can remember it and refer to it often. Set reasonable limits for how much time you spend studying each day, and break your study session up into manageable chunks of time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                                8. Use A Timer
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#studyAccordion">
                            <div class="accordion-body">
                                <p>Use a timer to help keep track of time and to make sure you stick to the timetable you created. Setting a timer helps keeps you focused on the task at hand, committed to working until the timer goes off, and helps keep you on track to cover all the material you need to. Above all else, it helps <a href="https://www.oxfordlearning.com/study-break-tips/">keep your break time effective</a> and guilt-free (because you’ve earned it!).</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section id="filiere" class="py-5 bg-black text-light">
        <div class="container">
            <div class="row align-items-center justify-content-md-center flex-row-reverse">
                <div class="col-md">
                    <img src="./../image/img svg/undraw_bookshelves_re_lxoy.svg" alt="learn" class="img-fluid">
                </div>
                <div class="col-md py-4">

                    <div id="learnhome" class="h1 py-4 ">Learning About your filière </div>

                    <div class="lead text-black">
                        <div class="accordion" id="learnAcor">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL1" aria-expanded="true" aria-controls="collapseL1">
                                        SMI
                                    </button>
                                </h2>
                                <div id="collapseL1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#learnAcor">
                                    <div class="accordion-body">

                                        <span style="color:#F69;font-size:20px" id="Objectifs">Objectifs</span><br />
                                        Cette filière se veut novatrice et pluridisciplinaire. Elle permettra aux étudiants concernés d’acquérir de bonnes bases dans les domaines des mathématiques (pures et appliquées) et en informatique. Elle permettra en particulier de :<br /><br />
                                        <ul style="padding-left:10px" type="circle">
                                            <li>1- Développer les connaissances des étudiants en informatique fondamentale, mathématiques physique, langues et communication;</li>
                                            <li> 2- Préparer les étudiants aux master, doctorat et aux diplômes d’ingénieurs;</li>
                                            <li>3- Préparer les étudiants à intégrer la vie active dans les domaines correspondants à leur formation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="SMA" class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL2" aria-expanded="false" aria-controls="collapseL2">
                                        SMA
                                    </button>
                                </h2>
                                <div id="collapseL2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#learnAcor">
                                    <div class="accordion-body">

                                        <span style="color:#c030cf;font-size:20px" id="Objectifs">Objectifs</span><br />

                                        <ul style="padding-left:10px" type="circle">
                                            <li>- Consolider la formation des étudiants dans les domaines de la logique, du raisonnement et des techniques de calcul, qui sont des outils indispensables tant aux mathématiques qu'aux autres disciplines scientifiques ; </li>
                                            <li>- Présenter des notions nouvelles riches, de manière à susciter l'intérêt des étudiants ; </li>
                                            <li>- Donner à nos étudiants un solide bagage de connaissances et de méthodes permettant notamment de passer de la perception intuitive de certaines notions à leur appropriation, afin de pouvoir les utiliser à un niveau supérieur, en mathématiques et dans les autres disciplines ; </li>
                                            <li>- Donner à nos étudiants l'opportunité de préparer les concours d'accès aux centres de formations aux métiers de l'enseignement et aussi aux grandes écoles d'ingénieurs </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL3" aria-expanded="false" aria-controls="collapseL3">
                                        SMP
                                    </button>
                                </h2>
                                <div id="collapseL3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#learnAcor">
                                    <div class="accordion-body">
                                        <span style="color:#69C;font-size:20px" id="Objectifs">Objectifs</span><br />

                                        Sans perdre de vue les mathématiques, l'informatique et la chimie, la licence fondamentale Sciences de la Matière Physique est centrée sur la mécanique, l'électromagnétisme, la thermodynamique, thermodynamique, l'optique... Progressivement, l'étudiant aura obtenu un enseignement de base lui permettant non seulement de poursuivre ses études doctorales ( au Maroc ou à l'étranger), mais aussi d'intégrer des écoles d'ingénieurs ou s'insérer éventuellement dans le monde socio-économique.
                                        <br />

                                        <span style="color:#69C;font-size:20px" id="Conditions">Conditions d'accès </span><br />
                                        Ce cursus est ouvert aux étudiants titulaires d'un baccalauréat scientifique ou technique ou d'un diplôme reconnu équivalent.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL4" aria-expanded="false" aria-controls="collapseL4">
                                        SMC
                                    </button>
                                </h2>
                                <div id="collapseL4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#learnAcor">
                                    <div class="accordion-body">
                                        La formation dispensée en filière SMC donne aux étudiants les compétences, qui gravitent autour de la formation en chimie organique, inorganique, chimie physique et chimie analytique permettant d'envisager une poursuite d'études ou une insertion directe dans le monde de travail. La filière SMC offre le choix entre 4 options.<br /><br />


                                        <li><span style="color:#30bdcf;font-size:20px" id="Objectifs">Objectifs</span><br />



                                            L'objectif de la formation est de transmettre des savoirs académiques généraux débouchant sur la maîtrise de connaissances fondamentales en chimie et en physique, pour s'intégrer dans différentes activités qui s'articulent autour :
                                            <br /><br />
                                            <ul style="padding-left:10px" type="circle">
                                                <li>de la recherche : le diplômé peut participer aux côtés des chercheurs à l'identification, à la conception et à l'amélioration de la synthèse et du mode d'isolement de produits; </li>
                                                <li> de la maîtrise les différentes techniques d'analyse nécessaire pour la caractérisation physicochimique des produits, organiques et inorganiques et pour assurer la qualité des produits aux différents stades. </li>
                                                <li>de la recherche documentaire et bibliographique pour rendre compte de son travail à l'écrit et à l'oral.</li>
                                                <li>de travailler en équipe et d'être capable de rédiger et présenter des rapports avec la maîtrise des outils informatiques. </li>
                                            </ul>
                                            <br />
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- safty -->

    <section id="safty" class="py-4">
        <div class="container lead">
            <div class="row align-items-center justify-content-md-center ">
                <div class="col-md">
                    <img src="./../image/img svg/undraw_medicine_b-1-ol.svg" alt="medicine image" class="img-fluid">
                </div>
                <div class="col-md py-4">
                    <div class="h1 py-4">Safety regulations for students</div>
                    <div class="accordion" id="accordionSafty">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOneSafty">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSafty" aria-expanded="true" aria-controls="collapseOneSafty">
                                    General work regulations
                                </button>
                            </h2>
                            <div id="collapseOneSafty" class="accordion-collapse collapse show" aria-labelledby="headingOneSafty" data-bs-parent="#accordionSafty">
                                <div class="accordion-body">
                                    At the course introduction, you will get information regarding:
                                    <ul>
                                        <li>House-specific safety rules</li>
                                        <li>Evacuation routes</li>
                                        <li>Emergency exits</li>
                                        <li>Emergency showers</li>

                                    </ul>

                                    Before you start a lab or field study, risk assessment has to be done and signed by a supervisor. Written handling instructions must also be done, taking into account the risk assessment. Literature regarding safety issues and chemical laboratory work is available from the course assistants. The course assistants will give further instructions concerning the correct handling of any chemicals and waste.

                                    Body and eye emergency showers are located in each lab or in the corridor outside. First aid kits for minor injuries can be found in or near the lab in special “stations”.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwoSafty">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSafty" aria-expanded="false" aria-controls="collapseTwoSafty">
                                    Working space
                                </button>
                            </h2>
                            <div id="collapseTwoSafty" class="accordion-collapse collapse" aria-labelledby="headingTwoSafty" data-bs-parent="#accordionSafty">
                                <div class="accordion-body">
                                    <ul>
                                        <li> Keep your working space free from chemicals and unused equipment.</li>
                                        <li>Spill must be attended to immediately – inform your course assistant if it concerns a chemical (and not harmless things like water). For absorbing chemical spill; use vermiculite and put it in a chemical waste cardboard box with a plastic bag inside.</li>
                                        <li> Cleaning personnel only take care of normal cleanings like floor and paper bins.</li>
                                        <li>Fume hood sinks and other sinks are to be kept free of rubbish.</li>
                                        <li> Corridors are evacuation routes and must be kept clear and must not be cluttered with equipment, cardboard boxes and the like, as well as rucksacks, bags and outdoor clothes.</li>
                                        <li> Ignition free fridges and freezers are used for the storage of flammable substances.</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThreeSafty">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeSafty" aria-expanded="false" aria-controls="collapseThreeSafty">
                                    Routine lab practices
                                </button>
                            </h2>
                            <div id="collapseThreeSafty" class="accordion-collapse collapse" aria-labelledby="headingThreeSafty" data-bs-parent="#accordionSafty">
                                <div class="accordion-body">
                                    <ul>
                                        <li><strong>Gloves</strong> must be worn when needed. Depending on the type of work different gloves should be used, stated in the written handling instructions (vinyl, latex, nitril, and such). Do not walk around with gloves on when you are not doing lab work as this can expose others in the lab to dangerous chemicals or isotopes.</li>
                                        <li><strong>Lab coats</strong>must be worn in the lab, but only in the lab.</li>
                                        <li><strong>Protection glasses</strong>should be used when needed or according to risk assessment.</li>
                                        <li>Do not throw<strong> dangerous waste</strong> – for example chemicals, sharp things, needles etc. – in the bins. Be aware that cleaning staff may come to harm. There are special containers for dangerous waste.</li>
                                        <li><strong>Pipetting</strong>by mouth is not permitted. Use a Peleus ball instead.</li>
                                        <li><strong>Solutions</strong>and samples should always be labelled with the name and content so they can be identified. And hazard symbols when applicable.</li>
                                        <li>When doing lab work, avoid having earphones with music in both ears. Have one ear free. Then you can hear if something dangerous is happening in the lab and if someone approaches you, to avoid being surprised and make sudden dangerous movements.</li>
                                        <li><strong>Eating and drinking</strong>are not allowed in the lab. Neither is smoking, snuff, putting on make-up or using hand lotion.</li>
                                    </ul>

                                </div>
                            </div>
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


    <!-- botton for page up -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
    </button>
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
        
        if(navigator.userAgent.toLowerCase().indexOf("firefox") > -1 )
        {
            document.getElementById("imagesvg").className= 'd-none d-md-block img-fluid w-100';

        }else{
            document.getElementById("imagesvg").className= 'd-none d-md-block img-fluid w-50';

        }
    </script>
    <script src="./../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>