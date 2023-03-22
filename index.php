<?php
session_start();
include("models/Database.php");
include("models/Constantes.php");
include("models/reservation.php");
include("models/menus.php");
include("models/clients.php");

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
    <link rel="stylesheet" href="views/assets/css/style.css">
    <title>projet restaurant</title>
</head>
<?php
if (isset($_GET["Acceuil"])) {
    include_once("views/navbar.php");
    include_once("views/Acceuil.php");
    include_once("views/footer.php");
} else if (isset($_GET["reservation"])) {
    include_once("views/navbar.php");
    include_once("views/reservation.php");
    include_once("controllers/reservationCTRL.php");
    include_once("views/footer.php");
} else if (isset($_GET["mentions_legales"])) {
    include_once("views/navbar.php");
    // include_once("controllers/mentions_legalesCTRL.php");
    include_once("views/mentions_legales.php");
    include_once("views/footer.php");
} else if (isset($_GET["menu"])) {
    include_once("views/navbar.php");
    include_once("views/menu.php");
    include_once("views/footer.php");
} else if (isset($_GET["biographie"])) {
    include_once("views/navbar.php");
    include_once("views/biographie.php");
    include_once("views/footer.php");
} else if (isset($_GET["gallerie"])) {
    include_once("views/navbar.php");
    include_once("views/gallerie.php");
    include_once("views/footer.php");
} else if (isset($_GET["evenements"])) {
    include_once("views/navbar.php");
    include_once("views/evenements.php");
    include_once("views/footer.php");
}
?>
</body>
<script src="views/assets/js/test.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>