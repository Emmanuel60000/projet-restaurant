
<p class="p_annuler_reservation">
Si vous avez besoin d'annuler votre réservation, vous pouvez le faire en remplissant ce formulaire 
Nous espérons avoir le plaisir de vous accueillir une prochaine fois.<br>
Cordialement,
<strong>Le Barrio Alto</strong>
</p>
<!-- Paragraphe expliquant comment annuler la réservation -->
<form class="form_reservation" action="" method="post">
    <label for="mail">Votre adresse mail :</label>
    <input type="email" name="mail_clients" >
    <!-- Champ de saisie de l'adresse e-mail -->
    <?php
    if (isset($error["mail_clients"])) { ?>
      <p><?php echo htmlspecialchars($error["mail_clients"]); ?></p>
    <?php } ?>
    <!-- Affichage de l'erreur associée à l'adresse e-mail (si présente) -->
    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" name="mot_de_passe"><br><br>
    <!-- Champ de saisie du mot de passe -->
    <?php
    if (isset($error["mot_de_passe"])) { ?>
      <p><?php echo htmlspecialchars($error["mot_de_passe"]); ?></p>
    <?php } ?>
    <!-- Affichage de l'erreur associée au mot de passe (si présente) -->
    <input type="submit" name="annuler_Réservation" value="Connexion">
    <!-- Bouton de soumission pour annuler la réservation -->
</form>

    
