<?php

$message = "";
$reservation = new Reservation();
$clients = new Clients();



//Le traitement du formulaire
if (isset($_POST["Réserver"])) {
    $error = [];

    if (isset($_POST["nom_clients"]) && !empty($_POST["nom_clients"])) {
        $nom_clients = $_POST["nom_clients"];
    } else {
        $error['nom_clients'] = "Le nom_clients est manquant";
    }
    if (isset($_POST["prenom_clients"]) && !empty($_POST["prenom_clients"])) {
        $prenom_clients = $_POST["prenom_clients"];
    } else {
        $error['prenom_clients'] = "Le prenom_clients est manquant";
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
    } else {
        $error['telephone_clients'] = "La telephone_clients est manquante";
    }
    if (isset($_POST["date_reservation"]) && !empty($_POST["date_reservation"])) {
        $date_reservation = $_POST["date_reservation"];
    } else {
        $error['date_reservation'] = "La date_reservation est manquante";
    }

    if (isset($_POST["heure_reservation"]) && !empty($_POST["heure_reservation"])) {
        $heure_reservation = $_POST["heure_reservation"];
    } else {
        $error['heure_reservation'] = "L' heure_reservation est manquante";
    }
    if (isset($_POST["nombredepersonne_reservation"]) && !empty($_POST["nombredepersonne_reservation"])) {
        $nombredepersonne_reservation = $_POST["nombredepersonne_reservation"];
    } else {
        $error['nombredepersonne_reservation'] = "Le nombre de nombredepersonne_reservation est manquante";
    }
    if (isset($_POST["commentaires"]) && !empty($_POST["commentaires"])) {
        $commentaires = $_POST["commentaires"];
    } else {
        $error['commentaires'] = "Le commentaire est manquant";
    }

    if (empty($error)) {

        $clients->setNom_clients($nom_clients);
        $clients->setprenom_clients($prenom_clients);
        $clients->setMail_clients($email);
        $clients->setTelephone_clients($telephone_clients);

        $reservation->setDate_reservation($date_reservation);
        $reservation->setHeure_reservation($heure_reservation);
        $reservation->setNombredepersonne_reservation($nombredepersonne_reservation);
        $reservation->setCommentaires($commentaires);

        $user = $clients->verif();

        if ($user === false) {
            echo "pass";
            $reservation->insert_reservation();
            $clients->insert_clients();
            $message = "La reservation a bien été prise";
            header("Location:index.php?Acceuil");
        } else {
            if ($user["mail_clients"] === $email) {
                $mailExiste = "le mail n'est pas disponible";
            }
        }
    }
}
