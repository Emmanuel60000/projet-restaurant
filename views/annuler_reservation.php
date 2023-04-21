

<p class="p_annuler_reservation">
Si vous avez besoin d'annuler votre réservation, vous pouvez le faire en remplissant ce formulaire 
Nous espérons avoir le plaisir de vous accueillir une prochaine fois.<br>
Cordialement,
<strong>Le Barrio Alto</strong>
</p>


<form action="" method="post">
<label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom_clients" required>
    <?php
    if (isset($error["nom_clients"])) { ?>
      <p><?php echo $error["nom_clients"]; ?></p>
    <?php } ?>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom_clients" required>
    <?php
    if (isset($error["prenom_clients"])) { ?>
      <p><?php echo $error["prenom_clients"]; ?></p>
    <?php } ?>
    <label for="mail">Votre adresse mail :</label>
    <input type="email"  name="mail_clients" required>
    <?php
    if (isset($error["mail_clients"])) { ?>
      <p><?php echo $error["mail_clients"]; ?></p>
    <?php } ?>
    <!-- <label for="motdepasse">Mot de passe :</label>
    <input type="password"  name="motdepasse_clients" required> -->
    <?php
   /* if (isset($error["motdepasse_clients"])) { ?>
      <p><?php echo $error["motdepasse_clients"]; ?></p>
    <?php } */?>
    
    <input type="submit" name="annuler_Réservation" value="Connexion">
    </form>

   