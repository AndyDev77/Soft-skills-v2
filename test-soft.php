<?php

require './admin/middlewares/data.php';
if (!isset($_SESSION['user_name'])) {
    header('location:login_soft.php');
}


$acquis = 100;
$cours = 70;
$compliquer = 40;
$aide = 20;
$bar = "bar";
$apprenti = "Apprentissage";
$comp = "Compétences intrapersonnelles";
$ref =  "Réfléxion et imagination";
$com =  "Communication";
$comp2 = "Compétences interpersonnelles";
$lead =  "Leadership";

// Calcul de la moyenne des softs skills

if (isset($_POST['apprentissage'])) {
    $moyenneA = array_sum($_POST['apprentissage']) / count($_POST['apprentissage']);
    $resultA = (int)$moyenneA;
    var_dump($resultA);
    var_dump($_POST['apprentissage']);
}

if (isset($_POST['intrapersonnelles'])) {
    $moyenneIntra = array_sum($_POST['intrapersonnelles']) / count($_POST['intrapersonnelles']);
    $resultIntra = (int)$moyenneIntra;
    //var_dump($resultIntra);
    //var_dump($_POST['intrapersonnelles']);

}

if (isset($_POST['reflexion'])) {
    $moyenneR = array_sum($_POST['reflexion']) / count($_POST['reflexion']);
    $resultR = (int)$moyenneR;
    //var_dump($_POST['reflexion']);
}


if (isset($_POST['communication'])) {
    $moyenneC = array_sum($_POST['communication']) / count($_POST['communication']);
    $resultC = (int)$moyenneC;
    //var_dump($_POST['communication']);

}

if (isset($_POST['interpersonnelles'])) {
    $moyenneInter = array_sum($_POST['interpersonnelles']) / count($_POST['interpersonnelles']);
    $resultInter = (int)$moyenneInter;
    //  $resultInter = (int)$moyenneInter . " %";
    // var_dump($_POST['interpersonnelles']);


}

if (isset($_POST['leadership'])) {
    $moyenneL = array_sum($_POST['leadership']) / count($_POST['leadership']);
    $resultL = (int)$moyenneL;
    //var_dump($_POST['leadership'] );
}


// Validation du formulaire

if (isset($_POST['valider-form'])) {
    $user_id = $_SESSION['user-id'];
    $name_user = $_SESSION['user_name'];

    if (isset($_GET[$user_id])) {
        echo "L'utilisateur existe déjà.";

        // Mise à jour des données de la roue

        $selectUpdRoue = "SELECT apprentissage, competenceIntra, reflexion,communication, competenceInter, leadership FROM roue WHERE id=$user_id";
        $resultUdp_Roue = mysqli_query($connexion, $selectUpdRoue);

        $updRoue = "UPDATE roue SET apprentissage='$resultA', competenceIntra='$resultIntra', reflexion='$resultR', communication='$resultC', competenceInter='$resultInter', leadership='$resultL' WHERE id=$user_id LIMIT 1";

        $resultUpdRoue  = mysqli_query($connexion, $updRoue);
        header('location:roue.php');

        // Mise à jour des données de la famille Apprentissage

        $selectUpdApp = "SELECT Volonte, Apprendre, evaluation, Controle, Autonomie, Esprit, Curiosite, Methodologie FROM apprentissage WHERE id=$user_id";
        $resultUdp_App = mysqli_query($connexion, $selectUpdApp);

        $updApp = "UPDATE apprentissage SET Volonte='$volonte', Apprendre='$apprendre', evaluation='$evaluation', Controle='$controle', Autonomie='$autonomie', Esprit='$esprit', Curiosite='$curiosite', Methodologie='$methodologie' WHERE id=$user_id LIMIT 1";

        $resultUpdApp  = mysqli_query($connexion, $updApp);
        header('location:roue.php');

        // Mise à jour des données de la famille Compétences intrapersonnelles

        $selectUpdIntra = "SELECT positive, ethique, temps, pression, stress, presence, motivation, faire_confiance, confiance_soi,resilience FROM intrapersonnelles WHERE id=$user_id";
        $resultUdp_Intra = mysqli_query($connexion, $selectUpdIntra);

        $updIntra = "UPDATE intrapersonnelles SET positive='$positive',  ethique='$ethique', temps='$temps', pression='$pression', stress='$stress', presence='$presence', motivation='$motivation', faire_confiance='$faire_confiance', confiance_soi='$confiance_soi', resilience='$resilience' WHERE id=$user_id LIMIT 1";

        $resultUpdIntra  = mysqli_query($connexion, $updIntra);
        header('location:roue.php');

        // Mise à jour des données de la famille Réflexion et Imagination

        $selectUpdRef = "SELECT resolution, analytique, temps, critique, creativite, ouverture, intuition FROM reflexion WHERE id=$user_id";
        $resultUdp_Ref = mysqli_query($connexion, $selectUpdRef);

        $updReflexion  = "UPDATE reflexion SET resolution='$resolution', analytique='$analytique', critique='$critique', creativite='$creativite', ouverture='$ouverture', intuition='$intuition' WHERE id=$user_id LIMIT 1";

        $resultUpdReflexion  = mysqli_query($connexion, $updReflexion);
        header('location:roue.php');

        // Mise à jour des données de la famille Communication

        $selectUpdComm = "SELECT orale, ecrite, nonverbale, active FROM communication WHERE id=$user_id";
        $resultUdp_Comm = mysqli_query($connexion, $selectUpdComm);

        $updComm = "UPDATE communication SET orale='$orale', ecrite='$ecrite', nonverbale='$nonverbale', active='$active' WHERE id=$user_id LIMIT 1";

        $resultUpdComm  = mysqli_query($connexion, $updComm);
        header('location:roue.php');

        // Mise à jour des données de la famille Compétences interpersonnelles

        $selectUpdInter = "SELECT travailequipe, collectif, coordination, conflit, fiabilite, flexibilite, respect, assertivite, feedback, politesse FROM interpersonnelles WHERE id=$user_id";
        $resultUdp_Inter = mysqli_query($connexion, $selectUpdInter);

        $updInter = "UPDATE interpersonnelles SET travailequipe='$travailequipe', collectif='$collectif', coordination='$coordination', conflit='$conflit',fiabilite='$fiabilite', flexibilite='$flexibilite', respect='$respect', assertivite='$assertivite', feedback='$feedback', politesse='$politesse' WHERE id=$user_id LIMIT 1";

        $resultUpdInter  = mysqli_query($connexion, $updInter);
        header('location:roue.php');

        // Mise à jour des données de la famille Leadership

        $selectUpdLead = "SELECT responsabilite, incertitude, vision, strategique, decision, integrite, audace, negociation, emotionnelle, professionnalisme FROM leadership WHERE id=$user_id";
        $resultUdp_Lead = mysqli_query($connexion, $selectUpdLead);

        $updLead = "UPDATE leadership SET responsabilite='$responsabilite', incertitude='$incertitude', vision='$vision', strategique='$strategique', decision='$decision', integrite='$integrite', audace='$audace', negociation='$negociation', emotionnelle='$emotionnelle', professionnalisme='$professionnalisme' WHERE id=$user_id LIMIT 1";

        $resultUpdLead  = mysqli_query($connexion, $updLead);
        header('location:roue.php');
    } else {
        echo "L'utilisateur n'existe pas encore.";
        // Insertion de la roue

        $select = " SELECT * FROM roue";

        $result = mysqli_query($connexion, $select);

        $insert = "INSERT INTO roue(name_user, apprentissage, competenceIntra, reflexion, communication, competenceInter,leadership,id) VALUES('$name_user','$resultA',' $resultIntra','$resultR','$resultC',' $resultInter','$resultL', $user_id)";
        mysqli_query($connexion, $insert);
        header('location:roue.php');

        // Insertion Apprentissage

        $volonte = $_POST['apprentissage'][0];
        $apprendre = $_POST['apprentissage'][1];
        $evaluation = $_POST['apprentissage'][2];
        $controle = $_POST['apprentissage'][3];
        $autonomie = $_POST['apprentissage'][4];
        $esprit = $_POST['apprentissage'][5];
        $curiosite = $_POST['apprentissage'][6];
        $methodologie = $_POST['apprentissage'][7];

        $selectApp = "SELECT * FROM apprentissage ";
        $resultApp = mysqli_query($connexion, $selectApp);

        $insertApp = "INSERT INTO apprentissage(name_user, Volonte, Apprendre, evaluation, Controle, Autonomie, Esprit, Curiosite, Methodologie, id) VALUES('$name_user','$volonte',' $apprendre ','$evaluation','$controle',' $autonomie','$esprit','$curiosite','$methodologie', $user_id)";

        mysqli_query($connexion, $insertApp);
        header('location:roue.php');

        // Insertion Compétences intrapersonnelles

        $positive = $_POST['intrapersonnelles'][0];
        $ethique = $_POST['intrapersonnelles'][1];
        $temps = $_POST['intrapersonnelles'][2];
        $pression = $_POST['intrapersonnelles'][3];
        $stress = $_POST['intrapersonnelles'][4];
        $presence = $_POST['intrapersonnelles'][5];
        $motivation = $_POST['intrapersonnelles'][6];
        $faire_confiance = $_POST['intrapersonnelles'][7];
        $confiance_soi = $_POST['intrapersonnelles'][8];
        $resilience = $_POST['intrapersonnelles'][9];

        $selectIntra = "SELECT * FROM intrapersonnelles";
        $resultIntra = mysqli_query($connexion, $selectIntra);

        $insertIntra = "INSERT INTO intrapersonnelles(name_user, positive, ethique, temps, pression, stress, presence, motivation, faire_confiance,confiance_soi, resilience, id) VALUES('$name_user',' $positive',' $ethique','$temps','$pression','$stress','$presence','$motivation','$faire_confiance','$confiance_soi','$resilience', $user_id)";

        mysqli_query($connexion, $insertIntra);
        header('location:roue.php');

        // Insertion Réflexion et Imagination

        $resolution = $_POST['reflexion'][0];
        $analytique = $_POST['reflexion'][1];
        $critique = $_POST['reflexion'][2];
        $creativite = $_POST['reflexion'][3];
        $ouverture = $_POST['reflexion'][4];
        $intuition = $_POST['reflexion'][5];

        $selectReflexion = "SELECT * FROM reflexion";
        $resultReflexion = mysqli_query($connexion, $selectReflexion);

        $insertReflexion = "INSERT INTO reflexion(resolution, analytique, critique, creativite, ouverture, intuition, name_user, id) VALUES('$resolution','$analytique','  $critique ','$creativite',' $ouverture',' $intuition','$name_user', $user_id)";

        mysqli_query($connexion, $insertReflexion);
        header('location:roue.php');

        // Insertion Communication

        $orale = $_POST['communication'][0];
        $ecrite = $_POST['communication'][1];
        $nonverbale = $_POST['communication'][2];
        $active = $_POST['communication'][3];

        $selectComm = "SELECT * FROM communication";
        $resultComm = mysqli_query($connexion, $selectComm);

        $insertComm = "INSERT INTO communication(orale, ecrite, nonverbale, active, name_user, id) VALUES('$orale','$ecrite',' $nonverbale ','$active','$name_user', $user_id)";

        mysqli_query($connexion, $insertComm);
        header('location:roue.php');

        // Insertion Compétences interpersonnelles

        $travailequipe = $_POST['interpersonnelles'][0];
        $collectif = $_POST['interpersonnelles'][1];
        $coordination = $_POST['interpersonnelles'][2];
        $conflit = $_POST['interpersonnelles'][3];
        $fiabilite = $_POST['interpersonnelles'][4];
        $flexibilite = $_POST['interpersonnelles'][5];
        $respect = $_POST['interpersonnelles'][6];
        $assertivite = $_POST['interpersonnelles'][7];
        $feedback = $_POST['interpersonnelles'][8];
        $politesse = $_POST['interpersonnelles'][9];

        $selectInter = "SELECT * FROM interpersonnelles";
        $resultInter = mysqli_query($connexion, $selectInter);

        $insertInter = "INSERT INTO interpersonnelles(travailequipe, collectif, coordination, conflit, fiabilite, flexibilite, respect, assertivite, feedback,politesse, name_user, id) VALUES('$travailequipe',' $collectif',' $coordination','$conflit','$fiabilite','$flexibilite','$respect','$assertivite','$feedback','$politesse','$name_user', $user_id)";

        mysqli_query($connexion, $insertInter);
        header('location:roue.php');

        // Insertion Leadership

        $responsabilite = $_POST['leadership'][0];
        $incertitude = $_POST['leadership'][1];
        $vision = $_POST['leadership'][2];
        $strategique = $_POST['leadership'][3];
        $decision = $_POST['leadership'][4];
        $integrite = $_POST['leadership'][5];
        $audace = $_POST['leadership'][6];
        $negociation = $_POST['leadership'][7];
        $emotionnelle = $_POST['leadership'][8];
        $professionnalisme = $_POST['leadership'][9];

        $selectLead = "SELECT * FROM leadership";
        $resultLead = mysqli_query($connexion, $selectLead);

        $insertLead = "INSERT INTO leadership(responsabilite, incertitude, vision, strategique, decision, integrite, audace, negociation, emotionnelle,professionnalisme , name_user, id) VALUES('$responsabilite',' $incertitude',' $vision','$strategique','$decision','$integrite','$audace','$negociation','$emotionnelle','$professionnalisme ','$name_user', $user_id)";

        mysqli_query($connexion, $insertLead);
        header('location:roue.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil de <?php echo $_SESSION['user_name'] ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/svg+xml">
    <!-- Bundle CSS file -->
    <link href="./assets/css/bundle.css" rel="stylesheet" />
    <!--SWiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

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
                                    <a href="user_page.php" class="k-hover">
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

    <section class="soft clearfix news-home-box pd-bottom-1000 bg-light pd-left-right-50px">
        <div class="title-box mg-400">
            <div class="container-fluid">
                <div class="pd-right-95px">
                    <div class="heading heading-sub" data-aos-delay="300" data-aos="fade-up">
                        <br><br>
                        <span class="sub-title d-flex justify-content-center"><?php echo $_SESSION['user_name'] ?></span>
                        <h2 class="title title-lg fw-light d-flex justify-content-center">Testez vos soft-skills</h2>
                    </div>
                    <br>
                    <div class="description d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                        <p style="color: white;">Attention, pour un résultat pertinent, vous devez choisir votre niveau pour chaque item dans le menu déroulant.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="news-list">
            <div class="container-fluid">
                <div class="tab-container d-flex justify-content-center">
                    <form action="" class="quiz" method="POST">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Familles</th>
                                    <th>Items</th>
                                    <th>Niveaux</th>
                                </tr>
                            </thead>
                            <div>
                                <tbody>
                                    <!--Apprentissage-->

                                    <div data-question="1" class="quiz__step--1 quiz__step--current quiz__step">
                                        <tr>
                                            <td class="status status-apprentissage" rowspan="8" class="quiz__question"> Apprentissage</td>
                                            <td>Volonté d'apprendre
                                            <td class="answer" class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option class="option" value="<?php echo $acquis ?>">Acquis</option>
                                                    <option class="option" value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option class="option" value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option class="option" value="<?php echo $aide  ?>">Besoin d'aide</option>

                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                        <br>

                                        <tr>
                                            <td> <a id="popup-trigger1">Apprendre à apprendre</a> </td>

                                            <td class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Auto-évaluation</td>
                                            <td class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <a id="popup-trigger3">Contrôle de qualité</a></td>
                                            <td class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Autonomie</td>
                                            <td class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Esprit d'entreprendre</td>
                                            <td class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Curiosité</td>
                                            <td class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Compétence méthodologique</td>
                                            <td class="label-check">
                                                <select id="app" class="answer__label" name="apprentissage[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </div>

                                    <!-- Compétences intrapersonnelles -->

                                    <div data-question="2" class="quiz__step--2 quiz__step">
                                        <tr>
                                            <td class="status status-intrapersonnelles" rowspan="11" class="quiz__question"> Compétences intrapersonnelles</td>
                                            <td>Attitude positive
                                            <td class="answer" class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option class="option" value="<?php echo $acquis ?>">Acquis</option>
                                                    <option class="option" value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option class="option" value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option class="option" value="<?php echo $aide  ?>">Besoin d'aide</option>

                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                        <br>

                                        <tr>
                                            <td> <a id="popup-trigger2">Éthique</a></td>

                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Gestion du temps</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Capacité à travailler sous pression</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Gestion du stress</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Esprit d'entreprendre</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Présence</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a id="popup-trigger4">Motivation intrinsèque</a></td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Faire confiance</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Confiance en soi</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Résilience</td>
                                            <td class="label-check">
                                                <select id="intra" class="answer__label" name="intrapersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>

                                    </div>

                                    <!-- Réfléxion et imagination -->
                                    <div data-question="3" class="quiz__step--3 quiz__step">
                                        <tr>
                                            <td class="status status-reflexion" rowspan="6" class="quiz__question"> Réfléxion et imagination</td>
                                            <td>Résolution de problème
                                            <td class="answer" class="label-check">
                                                <select id="ref" class="answer__label" name="reflexion[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option class="option" value="<?php echo $acquis ?>">Acquis</option>
                                                    <option class="option" value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option class="option" value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option class="option" value="<?php echo $aide  ?>">Besoin d'aide</option>

                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                        <br>

                                        <tr>
                                            <td> Compétence analytique</td>
                                            <td class="label-check">
                                                <select id="ref" class="answer__label" name="reflexion[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Esprit Critique</td>
                                            <td class="label-check">
                                                <select id="ref" class="answer__label" name="reflexion[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Créativité</td>
                                            <td class="label-check">
                                                <select id="ref" class="answer__label" name="reflexion[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Ouverture à la nouveauté</td>
                                            <td class="label-check">
                                                <select id="ref" class="answer__label" name="reflexion[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Intuition</td>
                                            <td class="label-check">
                                                <select id="ref" class="answer__label" name="reflexion[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>


                                    </div>

                                    <!-- Communication -->
                                    <div data-question="4" class="quiz__step--4 quiz__step">
                                        <tr>
                                            <td class="status status-communication" rowspan="4" class="quiz__question"> Communication</td>
                                            <td>Communication orale
                                            <td class="answer" class="label-check">
                                                <select id="comm" class="answer__label" name="communication[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option class="option" value="<?php echo $acquis ?>">Acquis</option>
                                                    <option class="option" value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option class="option" value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option class="option" value="<?php echo $aide  ?>">Besoin d'aide</option>

                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                        <br>

                                        <tr>
                                            <td> Communication écrite</td>
                                            <td class="label-check">
                                                <select id="comm" class="answer__label" name="communication[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Communication non verbale</td>
                                            <td class="label-check">
                                                <select id="comm" class="answer__label" name="communication[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Écoute active</td>
                                            <td class="label-check">
                                                <select id="comm" class="answer__label" name="communication[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>


                                    </div>

                                    <!-- Compétences intrapersonnelles -->

                                    <div data-question="5" class="quiz__step--5 quiz__step">
                                        <tr>
                                            <td class="status status-interpersonnelles" rowspan="11" class="quiz__question"> Compétences interpersonnelles</td>
                                            <td>Travail en équipe
                                            <td class="answer" class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option class="option" value="<?php echo $acquis ?>">Acquis</option>
                                                    <option class="option" value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option class="option" value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option class="option" value="<?php echo $aide  ?>">Besoin d'aide</option>

                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                        <br>

                                        <tr>
                                            <td> Sens du collectif</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Coordination</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Gestion de conflit</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Gestion de conflit</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Fiabilité</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Flexibilité et adaptabilité</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Respect</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <a id="popup-trigger5">Assertivité</a></td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Acceptation du feedback</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Politesse</td>
                                            <td class="label-check">
                                                <select id="inter" class="answer__label" name="interpersonnelles[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>

                                    </div>

                                    <!-- Leadership -->

                                    <div data-question="6" class="quiz__step--6 quiz__step">
                                        <tr>
                                            <td class="status status-leadership" rowspan="10" class="quiz__question"> Leadership</td>
                                            <td>Responsabilité
                                            <td class="answer" class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option class="option" value="<?php echo $acquis ?>">Acquis</option>
                                                    <option class="option" value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option class="option" value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option class="option" value="<?php echo $aide  ?>">Besoin d'aide</option>

                                                </select>
                                            </td>
                                            </td>
                                        </tr>

                                        <br>

                                        <tr>
                                            <td> Capacité à faire face à l'incertitude</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Vision, visualisation</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Pensée stratégique</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Jugement et prise de décision</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Intégrité</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Audace</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Négociation</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Intelligence émotionnelle</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Professionnalisme</td>
                                            <td class="label-check">
                                                <select id="lead" class="answer__label" name="leadership[]" required>
                                                    <option value="" disabled selected>Choisir</option>
                                                    <option value="<?php echo $acquis ?>">Acquis</option>
                                                    <option value="<?php echo $cours ?>">En cours d'acquisition</option>
                                                    <option value="<?php echo $compliquer  ?>">Compliqué pour moi</option>
                                                    <option value="<?php echo $aide  ?>">Besoin d'aide</option>
                                                </select>
                                            </td>
                                        </tr>

                                    </div>
                                    <br><br>

                                </tbody>
                            </div>
                        </table>
                        <br><br>

                        <div class="d-flex justify-content-center">
                            <button type="submit" id="bt-sub" class="btn btn-lg btn-ht-primary btn-send mb-3 k-hover" name="valider-form">Valider</button>
                        </div>
                    </form>
                    <div id="popup1">
                        <p>"Apprendre à apprendre" se réfère à la capacité d'une personne à acquérir de nouvelles connaissances et compétences de manière autonome et efficace. Cela implique de comprendre comment apprendre de manière optimale, en identifiant ses propres styles d'apprentissage, en établissant des objectifs d'apprentissage clairs, en utilisant des stratégies efficaces de traitement de l'information, en prenant des notes, en organisant les informations et en développant des compétences d'auto-évaluation pour mesurer sa propre compréhension. En apprenant à apprendre, on devient plus conscient de ses propres méthodes d'apprentissage, ce qui peut conduire à une amélioration de la qualité de l'apprentissage et une plus grande capacité à apprendre de manière autonome tout au long de la vie.</p>
                        <a class="btn btn-lg btn-ht-primary btn-send mb-3 k-hover" id="close-popup1">Quitter</a>
                    </div>

                    <div id="popup2">
                        <p>L'éthique implique l'examen critique des concepts tels que le bien et le mal, le juste et l'injuste, la vertu et le vice, et la responsabilité personnelle et sociale. L'éthique peut également se référer à des codes de conduite professionnels qui régissent les comportements et les pratiques de diverses professions. En somme, l'éthique vise à promouvoir des comportements et des actions qui sont considérés comme moralement justes, responsables et acceptables dans une société donnée.</p>
                        <a class="btn btn-lg btn-ht-primary btn-send mb-3 k-hover" id="close-popup2">Quitter</a>
                    </div>
                    <div id="popup3">
                        <p>Capacité à auto-contrôler la qualité de son travail en toute objectivité.</p>
                        <a class="btn btn-lg btn-ht-primary btn-send mb-3 k-hover" id="close-popup3">Quitter</a>
                    </div>

                    <div id="popup4">
                        <p>Capacité à s'impliquer dans une activité qui fait sens pour soi ; avoir une attitude positif vis-à-vis de son travail sans avoir besoin de supervision constante.</p>
                        <a class="btn btn-lg btn-ht-primary btn-send mb-3 k-hover" id="close-popup4">Quitter</a>
                    </div>

                    <div id="popup5">
                        <p>Capacité à s'exprimer et à défendre ses droits en ses besoins sans empiéter sur ceux des autres.</p>
                        <a class="btn btn-lg btn-ht-primary btn-send mb-3 k-hover" id="close-popup5">Quitter</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- 
    <footer class="bottom">
        <section class="bottom__container">
            <div class="progress">
                <div class="progress__inner"></div>
            </div>
            <div class="navigation">
                <div class="navigation__btn navigation__btn--left"><svg width="20" height="20" viewBox="0 0 24 24">
                        <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                    </svg></div>
                <div class="navigation__btn navigation__btn--right"><svg width="20" height="20" viewBox="0 0 24 24">
                        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg></div>
            </div>
        </section>
    </footer> -->

    <div id="preloader"></div>

    <!-- Bundle JS Files -->
    <!-- Swiper JS -->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/bundle.js"></script>


</body>

</html>