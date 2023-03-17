<?php

$message = "";
$ajoue = new Reservation();



//Le traitement du formulaire
if (isset($_POST["Réserver"])) {
    $error = [];

    if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
        $nom = $_POST["nom"];
    } else {
        $error['nom'] = "Le nom est manquant";
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
    if (isset($_POST["date"]) && !empty($_POST["date"])) {
        $date = $_POST["date"];
    } else {
        $error['date'] = "La date est manquante";
    }

    if (isset($_POST["heure"]) && !empty($_POST["heure"])) {
        $heure = $_POST["heure"];
    } else {
        $error['heure'] = "L' heure est manquante";
    }
    if (isset($_POST["personnes"]) && !empty($_POST["personnes"])) {
        $personnes = $_POST["personnes"];
    } else {
        $error['personnes'] = "Le nombre de personnes est manquante";
    }
    if (isset($_POST["commentaires"]) && !empty($_POST["commentaires"])) {
        $commentaires = $_POST["commentaires"];
    } else {
        $error['commentaires'] = "Le commentaire est manquant";
    }
   
    if (empty($error)) {
       
        $ajoue->setNom_clients($nom);
        $ajoue->setMail_clients($email);
        $ajoue->setDate_reservation($date);
        $ajoue->setHeure_reservation($heure);
        $ajoue->setNombredepersonne_reservation($personnes);
        $ajoue->setCommentaires($commentaires);

        $user = $ajoue->verif();
        
        if ($user === false) {
            echo "pass";
                $ajoue->insert();
                $message = "le profil a bien été créer";
                header("Location:index.php?Acceuil");
            
        } else {
            if ($user["mail_clients"] === $email) {
                $mailExiste = "le mail n'est pas disponible";
            }
           
        }
    }
}