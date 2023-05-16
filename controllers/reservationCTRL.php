<?php

$message = "";
$reservation = new Reservation();
$clients = new Clients();
$choixmenu = new Menus();
$menu = $choixmenu->choix_menu();


//Le traitement du formulaire
if (isset($_POST["Réserver"])) {
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

    if (isset($_POST["telephone_clients"]) && !empty($_POST["telephone_clients"])) {
        $telephone_clients = $_POST["telephone_clients"];

        // Vérification du format du numéro de téléphone
        if (!preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $telephone_clients)) {
            $error['telephone_clients'] = "Le format du numéro de téléphone est invalide";
        }
    } else {
        $error['telephone_clients'] = "Le numéro de téléphone est manquant";
    }

    if (isset($_POST["date_reservation"]) && !empty($_POST["date_reservation"])) {
        $date_reservation = $_POST["date_reservation"];

        // Vérification de la validité de la date de réservation
        if (strtotime($date_reservation) < time()) {
            $error['date_reservation'] = "La date de réservation doit être ultérieure à la date actuelle";
        }
    } else {
        $error['date_reservation'] = "La date de réservation est manquante";
    }

    if (isset($_POST["heure_reservation"]) && !empty($_POST["heure_reservation"])) {
        $heure_reservation = $_POST["heure_reservation"];
    } else {
        $error['heure_reservation'] = "L'heure de réservation est manquante";
    }
    if (isset($_POST["date_reservation"]) && isset($_POST["heure_reservation"])) {
        $timestamp = strtotime($_POST["date_reservation"] . " " . $_POST["heure_reservation"]);
        if ($timestamp === false || $timestamp < time()) {
            $error['date_reservation'] = "La date et l'heure fournies ne sont pas valides ou sont déjà passées.";
        } elseif (date('N', $timestamp) > 6) {
            $error['date_reservation'] = "Le restaurant est fermé le lundi. Veuillez sélectionner un jour ouvrable.";
        }
    }


    if (isset($_POST["nombredepersonne_reservation"]) && !empty($_POST["nombredepersonne_reservation"])) {
        $nombredepersonne_reservation = $_POST["nombredepersonne_reservation"];
    } else {
        $error['nombredepersonne_reservation'] = "Le nombre de personnes est manquant";
    }

    if (isset($_POST["choix_menu"]) && !empty($_POST["choix_menu"]) && $_POST["choix_menu"] !== " ") {
        $choix_menu = $_POST["choix_menu"];
    } else {
        $error['choix_menu'] = "Le choix du menu est manquant";
    }

    if (isset($_POST["commentaires"])) {
        $commentaires = $_POST["commentaires"];
    }



    if (empty($error)) {

        $clients->setNom_clients($nom_clients);
        $clients->setPrenom_clients($prenom_clients);
        $clients->setMail_clients($email);
        $clients->setTelephone_clients($telephone_clients);

        $reservation->setDate_reservation($date_reservation);
        $reservation->setHeure_reservation($heure_reservation);
        $reservation->setNombredepersonne_reservation($nombredepersonne_reservation);
        $reservation->setCommentaires($commentaires);
        $reservation->setCode_menu($choix_menu);
        $user = $clients->verif();

        if ($user === false) {

            $clients->insert_clients();
            $user = $clients->verif();
            $reservation->setCode_clients($user["code_clients"]);
            $reservation->insert_reservation();
            $message = "La reservation a bien été prise";
            header("Location:index.php?Acceuil");
        } else {
            $reservation->setCode_clients($user["code_clients"]);
            $reservation->insert_reservation();
            header("Location:index.php?Acceuil");
        }
    }
}

