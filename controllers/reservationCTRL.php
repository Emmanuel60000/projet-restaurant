<?php
$reservation = new Reservation(); // Instanciation d'un objet Reservation pour gérer les réservations
$clients = new Clients(); // Instanciation d'un objet Clients pour gérer les clients
$choixmenu = new Menus(); // Instanciation d'un objet Menus pour gérer les menus
$menu = $choixmenu->choix_menu(); // Appel de la méthode choix_menu() pour récupérer les menus disponibles
// Le traitement du formulaire
if (isset($_POST["Réserver"])) {
    $error = [];
    // Validation du champ "nom_clients"
    if (isset($_POST["nom_clients"]) && !empty($_POST["nom_clients"])) {
        $nom_clients = htmlspecialchars($_POST["nom_clients"]);
        if (!preg_match("/^[a-zA-Z ]+$/", $nom_clients)) {
            $error['nom_clients'] = "Le nom ne doit contenir que des lettres alphabétiques et des espaces";
        } elseif (mb_strlen($nom_clients) < 2 || mb_strlen($nom_clients) > 50) {
            $error['nom_clients'] = "Le nom doit contenir entre 2 et 50 caractères";
        }
    } else {
        $error['nom_clients'] = "Le nom est manquant";
    }

    // Validation du champ "prenom_clients"
    if (isset($_POST["prenom_clients"]) && !empty($_POST["prenom_clients"])) {
        $prenom_clients = htmlspecialchars($_POST["prenom_clients"]);
        if (!preg_match("/^[a-zA-Z ]+$/", $prenom_clients)) {
            $error['prenom_clients'] = "Le prénom ne doit contenir que des lettres alphabétiques et des espaces";
        } elseif (mb_strlen($prenom_clients) < 2 || mb_strlen($prenom_clients) > 50) {
            $error['prenom_clients'] = "Le prénom doit contenir entre 2 et 50 caractères";
        }
    } else {
        $error['prenom_clients'] = "Le prénom est manquant";
    }

    // Validation du champ "mail_clients"
    if (isset($_POST["mail_clients"]) && !empty($_POST["mail_clients"])) {
        if (filter_var($_POST["mail_clients"], FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($_POST["mail_clients"]);
        } else {
            $error['mail_clients'] = "Renseignez une adresse e-mail valide";
        }
    } else {
        $error['mail_clients'] = "Le champ e-mail est manquant";
    }

    // Validation du champ "telephone_clients"
    if (isset($_POST["telephone_clients"]) && !empty($_POST["telephone_clients"])) {
        $telephone_clients = htmlspecialchars($_POST["telephone_clients"]);

        // Vérification du format du numéro de téléphone
        if (!preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $telephone_clients)) {
            $error['telephone_clients'] = "Le format du numéro de téléphone est invalide";
        }
    } else {
        $error['telephone_clients'] = "Le numéro de téléphone est manquant";
    }

    // Validation du champ "date_reservation"
    if (isset($_POST["date_reservation"]) && !empty($_POST["date_reservation"])) {
        $date_reservation = htmlspecialchars($_POST["date_reservation"]);

        // Vérification de la validité de la date de réservation
        if (strtotime($date_reservation) < time()) {
            $error['date_reservation'] = "La date de réservation doit être ultérieure à la date actuelle";
        }
    } else {
        $error['date_reservation'] = "La date de réservation est manquante";
    }

    // Validation du champ "heure_reservation"
    if (isset($_POST["heure_reservation"]) && !empty($_POST["heure_reservation"])) {
        $heure_reservation = htmlspecialchars($_POST["heure_reservation"]);
    } else {
        $error['heure_reservation'] = "L'heure de réservation est manquante";
    }

    // Validation de la date et de l'heure de réservation
    if (isset($_POST["date_reservation"]) && isset($_POST["heure_reservation"])) {
        $timestamp = strtotime($_POST["date_reservation"] . " " . $_POST["heure_reservation"]);
        if ($timestamp === false || $timestamp < time()) {
            $error['date_reservation'] = "La date et l'heure fournies ne sont pas valides ou sont déjà passées.";
        } elseif (date('N', $timestamp) > 6) {
            $error['date_reservation'] = "Le restaurant est fermé le lundi. Veuillez sélectionner un jour ouvrable.";
        }
    }

    // Validation du champ "nombredepersonne_reservation"
    if (isset($_POST["nombredepersonne_reservation"]) && !empty($_POST["nombredepersonne_reservation"])) {
        $nombredepersonne_reservation = htmlspecialchars($_POST["nombredepersonne_reservation"]);
    } else {
        $error['nombredepersonne_reservation'] = "Le nombre de personnes est manquant";
    }

    // Validation du champ "choix_menu"
    if (isset($_POST["choix_menu"]) && !empty($_POST["choix_menu"]) && $_POST["choix_menu"] !== " ") {
        $choix_menu = htmlspecialchars($_POST["choix_menu"]);
    } else {
        $error['choix_menu'] = "Le choix du menu est manquant";
    }

    // Validation du champ "mot_de_passe"
    if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"])) {
        if (mb_strlen($_POST["mot_de_passe"]) >= 8) {
            $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);
        } else {
            $error['mot_de_passe'] = "Entrez au moins 8 caractères";
        }
    } else {
        $error['mot_de_passe'] = "Le mot de passe est manquant";
    }

    // Récupération du champ "commentaires"
    if (isset($_POST["commentaires"])) {
        $commentaires = htmlspecialchars($_POST["commentaires"]);
    }

    // Vérification s'il y a des erreurs de validation
    if (empty($error)) {
        $clients->setNom_clients($nom_clients);
        $clients->setPrenom_clients($prenom_clients);
        $clients->setMail_clients($email);
        $clients->setTelephone_clients($telephone_clients);
        $clients->setMot_de_passe($mot_de_passe);

        $reservation->setDate_reservation($date_reservation);
        $reservation->setHeure_reservation($heure_reservation);
        $reservation->setNombredepersonne_reservation($nombredepersonne_reservation);
        $reservation->setCommentaires($commentaires);
        $reservation->setCode_menu($choix_menu);
        
        // Vérification si le client existe déjà dans la base de données
        $user = $clients->verif();

        if ($user === false) {
            // Insertion du nouveau client dans la base de données
            $clients->insert_clients();
            // Récupération du code du client nouvellement inséré
            $user = $clients->verif();
            $reservation->setCode_clients($user["code_clients"]);
            // Insertion de la réservation dans la base de données
            $reservation->insert_reservation();
            $message = "La réservation a bien été prise";
            header("Location:index.php?Acceuil");
        } else {
            $reservation->setCode_clients($user["code_clients"]);
            $reservation->insert_reservation();
            header("Location:index.php?Acceuil");
        }
    }
}
