<?php
$annuler_reservation = new Clients(); // Crée une nouvelle instance de la classe "Clients".
if (isset($_POST["annuler_Réservation"])) { // Vérifie si le formulaire a été soumis avec le champ "annuler_Réservation" défini.
    $error = []; // Initialise un tableau vide pour stocker les éventuelles erreurs.
    // Vérifie si le champ "mail_clients" existe et n'est pas vide.
    if (isset($_POST["mail_clients"]) && !empty($_POST["mail_clients"])) {
        // Vérifie si la valeur du champ "mail_clients" est une adresse email valide.
        if (filter_var($_POST["mail_clients"], FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($_POST["mail_clients"]); // Stocke la valeur du champ "mail_clients" après avoir converti les caractères spéciaux en entités HTML.
        } else {
            $error['mail_clients'] = "Renseignez une adresse email valide."; // Ajoute un message d'erreur si l'adresse email n'est pas valide.
        }
    } else {
        $error['mail_clients'] = "Le champ email est manquant."; // Ajoute un message d'erreur si le champ "mail_clients" est vide.
    }
    // Vérifie si le champ "mot_de_passe" existe et n'est pas vide.
    if (isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe'])) {
        $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]); // Stocke la valeur du champ "mot_de_passe" après avoir converti les caractères spéciaux en entités HTML.
    } else {
        $error["mot_de_passe"] = "Veuillez renseignez un mot de passe."; // Ajoute un message d'erreur si le champ "mot_de_passe" est vide.
    }
    // Vérifie s'il n'y a pas d'erreurs détectées.
    if (empty($error)) {
        $annuler_reservation->setMail_clients($email); // Appelle la méthode "setMail_clients" de l'objet "$annuler_reservation" pour définir l'adresse email.
        $annuler = $annuler_reservation->connexion(); // Appelle la méthode "connexion" de l'objet "$annuler_reservation" pour effectuer la connexion.
        // Vérifie si le mot de passe saisi correspond au mot de passe enregistré dans la base de données.
        if (password_verify($mot_de_passe, $annuler[0]["mot_de_passe"])) {
            $_SESSION['donnees'] = $annuler; // Stocke les données de l'utilisateur dans la session.
            // Vérifie si la session existe, n'est pas vide et si le rôle de l'utilisateur est administrateur.
            if (isset($_SESSION['donnees']) && !empty($_SESSION['donnees']) && $_SESSION['donnees'][0]["code_roles"] == 1) {
                header("Location: index.php?admin"); // Redirige vers la page "index.php?admin".
            } else {
                header("Location:index.php?tableau_reservation"); // Redirige vers la page "index.php?tableau_reservation".
            }
        } else {
            $error = "<p>Mot de passe incorrect.</p>"; // Stocke un message d'erreur si le mot de passe saisi est incorrect.
        }
    }
}
?>