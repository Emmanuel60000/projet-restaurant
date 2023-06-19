<h1 class="h1_reservation">
  RESERVATION
</h1>
<!-- Titre de la réservation -->

<p class="p_reservation">
  Vous pouvez réserver une table dans notre restaurant, nous serons ravis de vous accueillir
  et pour cela veuillez remplir les champs ci-dessous:
</p>
<!-- Message invitant les utilisateurs à réserver -->
</header>

<main>
  <form class="form_reservation" action="" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom_clients" >
    <?php
    if (isset($error["nom_clients"])) { ?>
      <p><?php echo htmlspecialchars($error["nom_clients"]); ?></p>
    <?php } ?>
    <!-- Champ de saisie pour le nom avec message d'erreur -->

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom_clients" >
    <?php
    if (isset($error["prenom_clients"])) { ?>
      <p><?php echo htmlspecialchars($error["prenom_clients"]); ?></p>
    <?php } ?>
    <!-- Champ de saisie pour le prénom avec message d'erreur -->

    <label for="mail">Email</label>
    <input type="email" name="mail_clients"><br><br>
    <?php
    if (isset($error["mail_clients"])) { ?>
      <p><?php echo htmlspecialchars($error["mail_clients"]); ?></p>
    <?php } ?>
    <!-- Champ de saisie pour l'email avec message d'erreur -->
    <label for="tel">Téléphone :</label>
    <input type="tel" id="telephone" name="telephone_clients" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" >
    <?php
    if (isset($error["telephone_clients"])) { ?>
      <p><?php echo htmlspecialchars($error["telephone_clients"]); ?></p>
    <?php } ?>
    <!-- Champ de saisie pour le téléphone avec message d'erreur -->

    <label for="date">Date :</label>
    <input type="date" id="date" name="date_reservation" >
    <?php
    if (isset($error["date_reservation"])) { ?>
      <p><?php echo htmlspecialchars($error["date_reservation"]); ?></p>
    <?php } ?>
    <!-- Champ de saisie pour la date de réservation avec message d'erreur -->
    <label for="heure">Heure :</label>
    <select id="heure" name="heure_reservation" >
      <option value="" selected disabled hidden>Choisir une heure</option>
      <optgroup label="Déjeuner">
        <option value="12:00">12:00</option>
        <option value="12:30">12:30</option>
        <option value="13:00">13:00</option>
        <option value="13:30">13:30</option>
        <option value="14:00">14:00</option>
      </optgroup>
      <optgroup label="Dîner">
        <option value="19:00">19:00</option>
        <option value="19:30">19:30</option>
        <option value="20:00">20:00</option>
        <option value="20:30">20:30</option>
        <option value="21:00">21:00</option>
      </optgroup>
    </select>
    <?php
    if (isset($error["heure_reservation"])) { ?>
      <p><?php echo htmlspecialchars($error["heure_reservation"]); ?></p>
    <?php } ?>
    <!-- Champ de sélection pour l'heure de réservation avec message d'erreur -->

    <label for="personnes">Nombre de personnes :</label>
    <input type="number" id="personnes" name="nombredepersonne_reservation" min="1" max="10" >
    <?php
    if (isset($error["nombredepersonne_reservation"])) { ?>
      <p><?php echo htmlspecialchars($error["nombredepersonne_reservation"]); ?></p>
    <?php } ?>
    <!-- Champ de saisie pour le nombre de personnes avec message d'erreur -->

    <select name="choix_menu">
      <option value=" ">choix du menu</option>
      <?php
      if (is_array($menu) && count($menu) > 0) {
        foreach ($menu as $key => $value) {
      ?>
          <option value="<?= htmlspecialchars($value["code_menu"]) ?>"><?= htmlspecialchars($value["nom_menu"]) ?></option>
      <?php
        }
      }
      ?>
    </select>
    <?php
    if (isset($error["choix_menu"])) { ?>
      <p><?php echo htmlspecialchars($error["choix_menu"]); ?></p>
    <?php } ?>
    <!-- Champ de sélection pour le choix du menu avec message d'erreur -->

    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" name="mot_de_passe"><br><br>
    <?php
    if (isset($error["mot_de_passe"])) { ?>
      <p><?php echo htmlspecialchars($error["mot_de_passe"]); ?></p>
    <?php } ?>
    <!-- Champ de saisie pour le mot de passe avec message d'erreur -->

    <label for="commentaires">Commentaires (champ optionnel) :</label>
    <textarea id="commentaires" name="commentaires" rows="4" cols="50"></textarea>
    <!-- Zone de texte pour les commentaires -->

    <input type="submit" name="Réserver" value="Réserver">
    <!-- Bouton de soumission du formulaire -->

    <a href="index.php?annuler_reservation" class="annuler_reservation">Annuler une réservation</a>
    <!-- Lien pour annuler une réservation -->
  </form>
</main>