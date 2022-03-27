<?php
session_start();
if(isset($_SESSION['nom'])){
    echo "<script type=\"text/javascript\"> window.location='./home.php' </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Sign in</title>
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="./../../index.php" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="./../../index.php#news" class="nav-link">Latest News</a></li>

                    <!--list drop list formulaire -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                    <li class="nav-item"><a href="./log in.php" class="nav-link"><span class="text-primary">Log
                                in</span></a></li>
                    <li class="nav-item"><a href="./sign in.php" class="nav-link"><span class="text-primary">Sign
                                Up</span></a></li>
                </ul>
            </div>

        </div>
    </div>

    <section class="h-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="./../image/img-sign-up.jpg" alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>

                            <!-- déclaration form -->

                            <form action="./../php/sign in.php" id="form" method="POST" class="col-xl-6"
                                onsubmit="return checkInputs()">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase text-center">Student registration form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline ">
                                                <label class="form-label" for="nom"></label>
                                                <input type="text" name="nom" class="form-control form-control-lg"
                                                    placeholder="First name" id="nom" />
                                                <small>
                                                    <!-- message -->
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="prenom"></label>
                                                <input type="text" name="prenom" class="form-control form-control-lg"
                                                    placeholder="Last name" id="prenom" />
                                                <small>
                                                    <!-- message -->
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="CNE ou Massar"></label>
                                                <input type="text" name="CNE" class="form-control form-control-lg"
                                                    placeholder="CNE ou Massar" id="cne" />
                                                <small>
                                                    <!-- message -->
                                                </small>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="CIN"></label>
                                                <input type="text" name="CIN" class="form-control form-control-lg"
                                                    placeholder="N°Carte identité" id="cin" />
                                                <small>
                                                    <!-- message -->
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="address"></label>
                                        <input type="text" name="address" class="form-control form-control-lg"
                                            placeholder="Address" id="address" />
                                        <small>
                                            <!-- message -->
                                        </small>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                            <input class="form-check-input" type="radio" name="gender" value="F"
                                                checked />
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <label class="form-check-label" for="maleGender">Male</label>
                                            <input class="form-check-input" type="radio" name="gender" value="M" />
                                        </div>

                                        <div class="form-check form-check-inline mb-0">
                                            <label class="form-check-label" for="otherGender">Other</label>
                                            <input class="form-check-input" type="radio" name="gender" value="other" />
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <select name="state" id="state" class="form-select">
                                                <option value="NULL" hidden selected>country</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <small>
                                                <!-- message -->
                                            </small>
                                        </div>

                                        <div class="col-md-6 mb-4">

                                            <select name="city" id="city" class="form-select">
                                                <option value="NULL" hidden selected>City</option>
                                                <option value="Agadir">Agadir </option>
                                                <option value="Al Hoceïma">Al Hoceïma </option>
                                                <option value="Assilah">Assilah </option>
                                                <option value="Casablanca">Casablanca </option>
                                                <option value="Chefchaouen">Chefchaouen </option>
                                                <option value="Dakhla">Dakhla </option>
                                                <option value="El Jadida & Oualidia">El Jadida&amp;Oualidia </option>
                                                <option value="Erfoud & Rissani">Erfoud &amp; Rissani </option>
                                                <option value="Errachidia">Errachidia </option>
                                                <option value="Essaouira">Essaouira </option>
                                                <option value="Safi">Safi </option>
                                                <option value="Fes">Fes </option>
                                                <option value="Ifrane">Ifrane </option>
                                                <option value="Laâyoune">Laâyoune </option>
                                                <option value="Marrakech">Marrakech </option>
                                                <option value="Meknes">Meknes </option>
                                                <option value="Merzouga">Merzouga </option>
                                                <option value="Mohammédia">Mohammédia </option>
                                                <option value="Nador">Nador </option>
                                                <option value="Ouarzazate">Ouarzazate </option>
                                                <option value="Oujda & Saïdia">Oujda&amp;Saïdia </option>
                                                <option value="Rabat">Rabat </option>
                                                <option value="Salé">Salé </option>
                                                <option value="Tanger">Tanger </option>
                                                <option value="Temara">Temara </option>
                                                <option value="Tetouan">Tetouan </option>
                                                <option value="Zagora">Zagora </option>
                                            </select>
                                            <small>
                                                <!-- message -->
                                            </small>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <select name="filiere" id="filiere" class="form-select">
                                            <option value="NULL" hidden selected>Filière</option>
                                            <option value="SMI">SMI</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMC">SMC</option>
                                            <option value="SVI">SVI</option>
                                            <option value="Economie">Economie</option>
                                        </select>
                                        <small>
                                            <!-- message -->
                                        </small>

                                    </div>

                                    <div class="mb-4 ">
                                        <select name="years" id="years" class="form-select">
                                            <option value="NULL" hidden selected>Année Scolaire de la fac</option>
                                            <option value="1ere annee">1ère année</option>
                                            <option value="2eme annee">2eme année</option>
                                            <option value="3eme annee">3eme année</option>
                                            <option value="4eme annee">4eme année</option>
                                            <option value="5eme annee">5eme année</option>
                                            <option value="6eme annee">6eme année</option>
                                        </select>
                                        <small>
                                            <!-- message -->
                                        </small>

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password"></label>
                                        <input type="password" class="form-control form-control-lg" name="mdp"
                                            placeholder="password" id="mdp" />
                                        <small>
                                            <!-- message -->
                                        </small>

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password2"></label>
                                        <input type="password" name="mdp2" class="form-control form-control-lg"
                                            placeholder="password again" id="mdp2" />
                                        <small>
                                            <!-- message -->
                                        </small>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>


                                </div>
                            </form>
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

    <script src="./../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="./../js/validation_form_sign-in.js"></script>
</body>

</html>