<?php
if (isset($_SESSION['donnees']) && !empty($_SESSION['donnees']) && $_SESSION['donnees'][0]["code_roles"]==2) {
    $reservation = new Clients();
    $reservation->setNom_clients(htmlspecialchars($_SESSION['donnees'][0]["nom_clients"]));
    $reservation->setPrenom_clients(htmlspecialchars($_SESSION['donnees'][0]["prenom_clients"]));
    $reservation->setMail_clients(htmlspecialchars($_SESSION['donnees'][0]["mail_clients"]));
    $donne = $reservation->annuler_reservation();
    if (!empty($donne)) {
        $annuler = $donne;
        $reserv = new Reservation();
        if (isset($_POST["delete"])) {
            $reserv->setDate_creat_reservation(htmlspecialchars($_POST['delete']));
            $reserv->delete();
            header("Location:index.php?tableau_reservation");
        }
    }
    else {
        session_destroy();
        header("Location:index.php?Acceuil");
    }
}

if (isset($_POST["deconnexion"])) {
    session_destroy();
    header("Location:index.php?Acceuil");
}

