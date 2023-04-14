<?php

require './admin/middlewares/data.php';

$utilisateur_id = (int) trim($_GET['id']);

// echo $utilisateur_id;exit;

if (empty($utilisateur_id)) {
    header('Location: admin_page.php');
    exit;
}

/*Données Personnelles*/
$req = $connexion->prepare("SELECT * FROM user_form WHERE user_form.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_utilisateur = $resultSet->fetch_assoc();

if (!isset($voir_utilisateur['id'])) {
    header('Location: admin_page.php');
    exit;
}

/*Données de la roue */
$req = $connexion->prepare("SELECT * FROM roue WHERE roue.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_roue = $resultSet->fetch_assoc();

if (!isset($voir_roue['id'])) {
    echo "<script>alert(\"l'utilisateur n'a pas rempli le formulaire de softs-skills\")</script>";
    exit;
}

/*Données tableau de la roue*/

//Apprentisage 

$req = $connexion->prepare("SELECT * FROM apprentissage WHERE apprentissage.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_apprentissage = $resultSet->fetch_assoc();

if (!isset($voir_apprentissage['id'])) {
    echo "<script>alert(\"l'utilisateur n'a pas rempli le formulaire de softs-skills\")</script>";
    exit;
}

// Compétences intrapersonnelles

$req = $connexion->prepare("SELECT * FROM intrapersonnelles WHERE intrapersonnelles.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_intrapersonnelles = $resultSet->fetch_assoc();

if (!isset($voir_intrapersonnelles['id'])) {
    echo "<script>alert(\"l'utilisateur n'a pas rempli le formulaire de softs-skills\")</script>";
    exit;
}

// Réfléxion et imagination

$req = $connexion->prepare("SELECT * FROM reflexion WHERE reflexion.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_reflexion = $resultSet->fetch_assoc();

if (!isset($voir_reflexion['id'])) {
    echo "<script>alert(\"l'utilisateur n'a pas rempli le formulaire de softs-skills\")</script>";
    exit;
}

// Communication

$req = $connexion->prepare("SELECT * FROM communication WHERE communication.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_communication = $resultSet->fetch_assoc();

if (!isset($voir_communication['id'])) {
    header('Location: admin_page.php');
    echo "<script>alert(\"l'utilisateur n'a pas rempli le formulaire de softs-skills\")</script>";
    exit;
}

// Compétences interpersonnelles

$req = $connexion->prepare("SELECT * FROM interpersonnelles WHERE interpersonnelles.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_interpersonnelles = $resultSet->fetch_assoc();

if (!isset($voir_interpersonnelles['id'])) {
    header('Location: admin_page.php');
    echo "<script>alert(\"l'utilisateur n'a pas rempli le formulaire de softs-skills\")</script>";
    exit;
}


// Leadership

$req = $connexion->prepare("SELECT * FROM leadership WHERE leadership.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_leadership = $resultSet->fetch_assoc();

if (!isset($voir_leadership['id'])) {
    header('Location: admin_page.php');
    echo "<script>alert(\"l'utilisateur n'a pas rempli le formulaire de softs-skills\")</script>";
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil de <?= $voir_utilisateur['name']; ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/svg+xml">
    <!-- Bundle CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="./assets/css/bundle.css" rel="stylesheet" />

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <header id="header" class="header clearfix">
        <div class="header-box">
            <!-- Logo & Nav -->
            <div class="clearfix logo-nav-box pd-left-right-50px">
                <div class="container-fluid">
                    <div class="logo-nav-box-container">
                        <!-- Logo -->
                        <a href="index.php" class="logo d-flex align-items-center k-hover">
                            <img src="./assets/images/logo-1.png" srcset="./assets/images/logo-1@2x.png 2x" class="logo-dark" alt="">
                            <img src="./assets/images/logo-3.png" srcset="./assets/images/logo-3@2x.png 2x" class="logo-dark-2" alt="">
                            <h1 class="d-none">Usine-Ecole 4.0</h1>
                        </a>
                        <!-- Logo -->
                        <!-- Nav menu -->
                        <nav id="navbar" class="navbar">
                            <ul>
                                <li class="dropdown active">
                                    <a href="admin_page.php" class="k-hover">
                                        <span>Accueil</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="logout_soft.php" class="k-hover"><span>Déconnexion</span></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Nav menu -->
                        <!-- Mobile toggle -->
                        <i class="mobile-nav-toggle mobile-nav-show ficon ficon-hamburger-menu"></i>
                        <i class="mobile-nav-toggle mobile-nav-hide d-none ficon ficon-x-icon"></i>
                        <!-- Mobile toggle -->
                    </div>
                </div>
            </div>
            <!-- Logo & Nav -->
        </div>
    </header>

    <section id="news-events" class="clearfix news-events-box pd-left-right-50px bg-transparent-top pd-top-600 pd-bottom-1000">
        <div class="title-box mg-bottom-400">
            <div class="container-fluid">
                <div class="pd-right-30pc mb-5" data-aos-delay="300" data-aos="fade-up">
                    <div class="clearfix">
                        <div class="heading heading-sub">
                            <span class="sub-title line-before">Profil de <?= $voir_utilisateur['name']; ?></span>
                            <h1 class="title title-lg fw-light" style="color: #fff;">Informations</h1>
                        </div>
                        <div class="card" style="width: 40rem; padding: 50px;">
                            <div class="card-text">
                                <h2>Informations personnelles</h2>
                                <br>
                                <h6>Nom et Prénom: <?= $voir_utilisateur['name']; ?></h6>
                                <h6>Email: <?= $voir_utilisateur['email']; ?></h6>
                                <h6>Téléphone: <?= $voir_utilisateur['phone']; ?></h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="mb-5" data-aos-delay="600" data-aos="fade-up">
                    <div class="clearfix d-flex flex-nowrap justify-content-between">
                        <div class="card" style="width: 40rem; padding: 50px;">
                            <div class="card-container">
                                <div class="chart-container">
                                    <h2 class="text-center">Radar des compétences</h2>
                                    <br>
                                    <canvas id="barCanvas" aria-label="chart" role="img"></canvas>
                                </div>

                                <p id="apprentissage" style="display: none;"><?php echo $voir_roue['apprentissage']; ?></p>

                                <p id="intrapersonnelles" style="display: none;"><?php echo $voir_roue['competenceIntra']; ?></p>

                                <p id="reflexion" style="display: none;"><?php echo $voir_roue['reflexion']; ?></p>

                                <p id="communication" style="display: none;"><?php echo $voir_roue['communication']; ?></p>

                                <p id="interpersonnelles" style="display: none;"><?php echo $voir_roue['competenceInter'];  ?></p>

                                <p id="leadership" style="display: none;"><?php echo $voir_roue['leadership']; ?></p>
                            </div>
                        </div>
                        <br>
                        <div class="card" style="width: 70rem; padding: 50px;">
                            <div class="swiper-body">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <!-- Apprentissage -->
                                        <div class="swiper-slide">
                                            <div class="card-container">
                                                <div class="chart-container">
                                                    <h2>Apprentissages</h2>
                                                    <br>
                                                    <canvas id="barCanvasApp" aria-label="chart" role="img" style="width: 553px; height: 553px;"></canvas>
                                                </div>
                                                <p id="volonte" style="display: none;"><?= $voir_apprentissage['Volonte']; ?></p>
                                                <p id="apprendre" style="display: none;"><?= $voir_apprentissage['Apprendre'];  ?></p>
                                                <p id="evaluation" style="display: none;"><?= $voir_apprentissage['evaluation']; ?></p>
                                                <p id="controle" style="display: none;"><?= $voir_apprentissage['Controle']; ?></p>
                                                <p id="auto" style="display: none;"><?= $voir_apprentissage['Autonomie']; ?></p>
                                                <p id="esprit" style="display: none;"><?= $voir_apprentissage['Esprit']; ?></p>
                                                <p id="curiosite" style="display: none;"><?= $voir_apprentissage['Curiosite']; ?></p>
                                                <p id="methodologie" style="display: none;"><?= $voir_apprentissage['Methodologie']; ?></p>
                                            </div>
                                        </div>


                                        <!-- Compétences intrapersonnelles -->
                                        <div class="swiper-slide">
                                            <div class="card-container">
                                                <div class="chart-container">
                                                    <h2>Compétences intrapersonnelles</h2>
                                                    <br>
                                                    <canvas id="barCanvasIntra" aria-label="chart" role="img" style="width: 553px; height: 553px;"></canvas>
                                                </div>
                                                <p id="positive" style="display: none;"><?= $voir_intrapersonnelles['positive']; ?></p>
                                                <p id="ethique" style="display: none;"><?= $voir_intrapersonnelles['ethique']; ?></p>
                                                <p id="temps" style="display: none;"><?= $voir_intrapersonnelles['temps']; ?></p>
                                                <p id="pression" style="display: none;"><?= $voir_intrapersonnelles['pression']; ?></p>
                                                <p id="stress" style="display: none;"><?= $voir_intrapersonnelles['stress']; ?></p>
                                                <p id="presence" style="display: none;"><?= $voir_intrapersonnelles['presence']; ?></p>
                                                <p id="motivation" style="display: none;"><?= $voir_intrapersonnelles['motivation']; ?></p>
                                                <p id="confiance" style="display: none;"><?= $voir_intrapersonnelles['faire_confiance']; ?></p>
                                                <p id="soi" style="display: none;"><?= $voir_intrapersonnelles['confiance_soi']; ?></p>
                                                <p id="resilience" style="display: none;"><?= $voir_intrapersonnelles['resilience']; ?></p>
                                            </div>
                                        </div>

                                        <!-- Réfléxion et imagination -->
                                        <div class="swiper-slide">
                                            <div class="card-container">
                                                <div class="chart-container">
                                                    <h2>Réfléxion et imagination</h2>
                                                    <br>
                                                    <canvas id="barCanvasRef" aria-label="chart" role="img" style="width: 553px; height: 553px;"></canvas>
                                                </div>
                                                <p id="resolution" style="display: none;"><?= $voir_reflexion['resolution']; ?></p>

                                                <p id="analytique" style="display: none;"><?= $voir_reflexion['analytique']; ?></p>

                                                <p id="critique" style="display: none;"><?= $voir_reflexion['critique']; ?></p>

                                                <p id="creativite" style="display: none;"><?= $voir_reflexion['creativite']; ?></p>

                                                <p id="ouverture" style="display: none;"><?= $voir_reflexion['ouverture']; ?></p>

                                                <p id="intuition" style="display: none;"><?= $voir_reflexion['intuition']; ?></p>

                                            </div>
                                        </div>

                                        <!-- Communication -->
                                        <div class="swiper-slide">
                                            <div class="card-container">
                                                <div class="chart-container">
                                                    <h2>Communication</h2>
                                                    <br>
                                                    <canvas id="barCanvasCom" aria-label="chart" role="img" style="width: 553px; height: 553px;"></canvas>
                                                </div>
                                                <p id="orale" style="display: none;"><?= $voir_communication['orale']; ?></p>
                                                <p id="ecrite" style="display: none;"><?= $voir_communication['ecrite']; ?></p>
                                                <p id="nonverbale" style="display: none;"><?= $voir_communication['nonverbale']; ?></p>
                                                <p id="active" style="display: none;"><?= $voir_communication['active']; ?></p>



                                            </div>
                                        </div>

                                        <!-- Compétences intrapersonnelles -->
                                        <div class="swiper-slide">
                                            <div class="card-container">
                                                <div class="chart-container">
                                                    <h2>Compétences interpersonnelles</h2>
                                                    <br>
                                                    <canvas id="barCanvasInter" aria-label="chart" role="img" style="width: 553px; height: 553px;"></canvas>
                                                </div>
                                                <p id="travailequipe" style="display: none;"><?= $voir_interpersonnelles['travailequipe']; ?></p>
                                                <p id="collectif" style="display: none;"><?= $voir_interpersonnelles['collectif']; ?></p>
                                                <p id="coordination" style="display: none;"><?= $voir_interpersonnelles['coordination']; ?></p>
                                                <p id="conflit" style="display: none;"><?= $voir_interpersonnelles['conflit']; ?></p>
                                                <p id="fiabilite" style="display: none;"><?= $voir_interpersonnelles['fiabilite']; ?></p>
                                                <p id="flexibilite" style="display: none;"><?= $voir_interpersonnelles['flexibilite']; ?></p>
                                                <p id="respect" style="display: none;"><?= $voir_interpersonnelles['respect']; ?></p>
                                                <p id="assertivite" style="display: none;"><?= $voir_interpersonnelles['assertivite']; ?></p>
                                                <p id="feedback" style="display: none;"><?= $voir_interpersonnelles['feedback']; ?></p>
                                                <p id="politesse" style="display: none;"><?= $voir_interpersonnelles['politesse']; ?></p>


                                            </div>
                                        </div>

                                        <!-- Leadership -->
                                        <div class="swiper-slide">
                                            <div class="card-container">
                                                <div class="chart-container">
                                                    <h2>Leadership</h2>
                                                    <br>
                                                    <canvas id="barCanvasLead" aria-label="chart" role="img" style="width: 553px; height: 553px;"></canvas>
                                                </div>
                                                <p id="responsabilite" style="display: none;"><?= $voir_leadership['responsabilite']; ?></p>
                                                <p id="incertitude" style="display: none;"><?= $voir_leadership['incertitude']; ?></p>
                                                <p id="vision" style="display: none;"><?= $voir_leadership['vision']; ?></p>
                                                <p id="strategique" style="display: none;"><?= $voir_leadership['strategique']; ?></p>
                                                <p id="decision" style="display: none;"><?= $voir_leadership['decision']; ?></p>
                                                <p id="integrite" style="display: none;"><?= $voir_leadership['integrite']; ?></p>
                                                <p id="audace" style="display: none;"><?= $voir_leadership['audace']; ?></p>
                                                <p id="negociation" style="display: none;"><?= $voir_leadership['negociation']; ?></p>
                                                <p id="emotionnelle" style="display: none;"><?= $voir_leadership['emotionnelle']; ?></p>
                                                <p id="professionnalisme" style="display: none;"><?= $voir_leadership['professionnalisme']; ?></p>


                                            </div>
                                        </div>



                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="clearfix">

                    </div>
                </div>

            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!-- Resources -->
    <script src="./assets/js/roue.js"></script>
    <script src="./assets/js/apprenti.js"></script>
    <script src="./assets/js/intra.js"></script>
    <script src="./assets/js/ref.js"></script>
    <script src="./assets/js/communication.js"></script>
    <script src="./assets/js/inter.js"></script>
    <script src="./assets/js/lead.js"></script>
    <script src="./assets/js/bundle.js"></script>
</body>