<?php require_once("yaml/yaml/yaml.php"); ?>

<!DOCTYPE html>
<html long="fr">
<head>
    <meta charset="utf-8">
	<!--<link href="assets/css/competence.css" rel="stylesheet">
	<link href="assets/css/contact.css" rel="stylesheet">
	<link href="assets/css/experience.css" rel="stylesheet">
	<link href="assets/css/formation.css" rel="stylesheet">
	<link href="assets/css/propos.css" rel="stylesheet">-->
	<link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">

</head>


<body>
    <nav class="navbar">
        <h1 class="logo">Mon Site</h1>
        <div class="nav-links">
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#propos">A propos</a></li>
                <li><a href="#competence">Compétences</a></li>
                <li><a href="#experience">Expériences</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
		</div>

    </nav>


<section id="accueil">
<?php include("accueil.php"); ?>
</section>

<section id="propos">
<?php include("propos.php"); ?>
</section>

<section id="competence">
<?php include("competence.php"); ?>
</section>

<section id="experience">
<?php include("experience.php"); ?>
</section>

<section id="formation">
<?php include("formation.php"); ?>
</section>

<section id="Contact">
Pose des soucis avec footer
<?php //include("contact.php"); ?>
</section>


    </body>

<footer>
    <div class="contenu">
        <!--<div class="services">
            <h3>Réseaux</h3>-->
            <ul>
                <li> <a class="res"href="#">Instagram</a></li>
                <li> <a class="res"href="#">Twitter</a></li>
                <li> <a class="res"href="#">Discord</a></li>
                <li> <a class="res"href="#">Snapchat</a></li>
            </ul>

        <!--</div>-->
        <!--<a id="ar"href="../projet/propos.html">Page suivant</a>-->

    </div>
    






</footer>


</html>