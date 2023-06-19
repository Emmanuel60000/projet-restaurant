<?php
session_start();
include("models/Database.php");
include("models/Constantes.php");
include("models/reservation.php");
include("models/menus.php");
include("models/clients.php");
include("models/roles.php");
include("models/fournisseurs.php");
include("models/livrer.php");
include("models/produits.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.8.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.8.1/slick-theme.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/love-me-chain-v2-monospaced" type="text/css" />
    <link rel="stylesheet" href="views/assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>

    <title>projet restaurant</title>
</head>
<header>
    <nav class="nav">
        <div class="main-navlinks">
            <button id="menu-btn" class="button" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navlinks-container">
            <a href="index.php?Acceuil">Accueil</a>
            <a href="index.php?a_propos">A Propos</a>
            <a href="index.php?menu_presentation">Menu</a>
            <a href="index.php?biographie">Biographie</a>
            <a href="index.php?evenements">Evénements</a>
            <a href="index.php?gallerie">Galerie</a>
            <a href="#contact">Contact</a>
            <a href="#horaire">Horaires</a>
        </div>
        <div>
            <a href="index.php?Acceuil"><img class="image" src="views/assets/img/barrio_alto.png" alt="logo"></a>
        </div>
        <div>
            <a class="reservation" href="index.php?reservation">RESERVATION</a>
        </div>

    </nav>
</header>

<?php
if (isset($_GET["Acceuil"])) {
    include_once("views/Acceuil.php");
} elseif (isset($_GET["reservation"])) {
    include_once("controllers/reservationCTRL.php");
    include_once("views/reservation.php");
} elseif (isset($_GET["mentions_legales"])) {
    include_once("views/mentions_legales.php");
} elseif (isset($_GET["biographie"])) {
    include_once("views/biographie.php");
} elseif (isset($_GET["gallerie"])) {
    include_once("views/gallerie.php");
} elseif (isset($_GET["evenements"])) {
    include_once("views/evenements.php");
} elseif (isset($_GET["menu_presentation"])) {
    include_once("views/menu_presentation.php");
} elseif (isset($_GET["menu_entrees"])) {
    include_once("controllers/menusCTRL.php");
    include_once("views/menu_entrees.php");
} elseif (isset($_GET["menu_plats"])) {
    include_once("controllers/menusCTRL.php");
    include_once("views/menu_plats.php");
} elseif (isset($_GET["menu_desserts"])) {
    include_once("controllers/menusCTRL.php");
    include_once("views/menu_desserts.php");
} elseif (isset($_GET["menu_vins"])) {
    include_once("controllers/menusCTRL.php");
    include_once("views/menu_vins.php");
} elseif (isset($_GET["annuler_reservation"])) {
    include_once("controllers/clientsCTRL.php");
    include_once("views/annuler_reservation.php");
} elseif (isset($_GET["tableau_reservation"])) {
    include_once("controllers/tableau_reservationCTRL.php");
    include_once("views/tableau_reservation.php");
}elseif (isset($_GET["a_propos"])) {  
    include_once("views/a_propos.php");    
} elseif (isset($_GET["admin"])) {
    include_once("controllers/adminCTRL.php");  
    include_once("views/admin.php");    
}else {
    include_once("views/Acceuil.php");
}
?>

<footer>
    <div class="container-fluid">

        <div class="left-section">
            <h3 class="adresse">Localisation</h3><br>
            <p class="adresse">7 rue Jean Racine</p>
            <p class="adresse">Beauvais</p>
            <p class="adresse" id="contact">téléphone <br> 03 44 47 54 89</p>
        </div>

        <div class="center-section">
            <h3 class="heure" id="horaire">Heure d'ouverture</h3><br>
            <p class="heure">Ouvert du mardi au dimanche de 12 heure a 14 heure 30<br><br> puis de 18
                heure a 23 heure</p>
        </div>

        <div class="right-section">
            <div class="mail">
                <a href="mailto:emmanuel.diogo27@outlook.fr"><button class="e_mail">Email</button></a><br><br>
                <p class="resaux_sociaux">Resaux sociaux</p>
                <div class="btn   "> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg></div>

                <div class="btn  "><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </div>
                <div class="btn   "> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg> </div>
                <br><br>
                <div>
                    <a class="mention_legales" href="index.php?mentions_legales">Mentions légales et CGV</a>
                </div>
            </div>
        </div>
    </div>
</footer>



<button id="bouton-haut" title="Remonter en haut">
    <span class="fleche"></span>
</button>
<p class="bas_de_page">&copy; LE BARRIO ALTO 2023. ALL RIGHTS RESERVED.</p>
</body>
<script src="views/assets/js/test.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>

</html>