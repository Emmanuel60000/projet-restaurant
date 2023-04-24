<?php

$message = "";
$annuler_reservation = new Clients();

if (isset($_POST["annuler_Réservation"])) {
    $error = [];

    if (isset($_POST["nom_clients"]) && !empty($_POST["nom_clients"])) {
        $nom_clients = $_POST["nom_clients"];
        if (!preg_match("/^[a-zA-Z ]+$/", $nom_clients)) {
            $error['nom_clients'] = "Le nom ne doit contenir que des lettres alphabétiques et des espaces";
        } elseif (mb_strlen($nom_clients) < 2 || mb_strlen($nom_clients) > 50) {
            $error['nom_clients'] = "Le nom doit contenir entre 2 et 50 caractères";
        }
    } else {
        $error['nom_clients'] = "Le nom est manquant";
    }

    if (isset($_POST["prenom_clients"]) && !empty($_POST["prenom_clients"])) {
        $prenom_clients = $_POST["prenom_clients"];
        if (!preg_match("/^[a-zA-Z ]+$/", $prenom_clients)) {
            $error['prenom_clients'] = "Le prénom ne doit contenir que des lettres alphabétiques et des espaces";
        } elseif (mb_strlen($prenom_clients) < 2 || mb_strlen($prenom_clients) > 50) {
            $error['prenom_clients'] = "Le prénom doit contenir entre 2 et 50 caractères";
        }
    } else {
        $error['prenom_clients'] = "Le prénom est manquant";
    }

    if (isset($_POST["mail_clients"]) && !empty($_POST["mail_clients"])) {
        if (filter_var($_POST["mail_clients"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["mail_clients"];
        } else {
            $error['mail_clients'] = "renseigner un email validé";
        }
    } else {
        $error['mail_clients'] = "Le champ email est manquant";
    }

    if (empty($error)) {

        $annuler_reservation->setNom_clients($nom_clients);
        $annuler_reservation->setPrenom_clients($prenom_clients);
        $annuler_reservation->setMail_clients($email);
        $annuler = $annuler_reservation->annuler_reservation();

        if ($annuler === true) {
            header("Location:index.php?");

        }
    }
}
