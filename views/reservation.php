<h1 class="h1_reservation">
  RESERVATION
</h1>
<p class="p_reservation">
  Vous pouvez réserver une table dans notre réstaurant, nous serons ravis de vous acceuillir
  et pour cela veuillez remplir les champs ci-dessous:
</p>

</header>
<main>

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
    <label for="mail">Email</label>
    <input type="email" name="mail_clients"><br><br>
    <?php
    if (isset($error["mail_clients"])) { ?>
      <p><?php echo $error["mail_clients"]; ?></p>
    <?php } ?>
    <?php if (isset($mailExiste)) { ?>
      <p><?= $mailExiste ?></p>
    <?php } ?>
    <label for="tel">Téléphone :</label>
    <input type="tel" id="telephone" name="telephone_clients" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
    <?php
    if (isset($error["telephone_clients"])) { ?>
      <p><?php echo $error["telephone_clients"]; ?></p>
    <?php } ?>
    <label for="date">Date :</label>
    <input type="date" id="date" name="date_reservation" required>
    <?php
    if (isset($error["date_reservation"])) { ?>
      <p><?php echo $error["date_reservation"]; ?></p>
    <?php } ?>
    <label for="heure">Heure :</label>
    <select id="heure" name="heure_reservation" required>
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
      <p><?php echo $error["heure_reservation"]; ?></p>
    <?php } ?>
    <label for="personnes">Nombre de personnes :</label>
    <input type="number" id="personnes" name="nombredepersonne_reservation" min="1" max="10" required>
    <?php
    if (isset($error["nombredepersonne_reservation"])) { ?>
      <p><?php echo $error["nombredepersonne_reservation"]; ?></p>
    <?php } ?>
    <select name="choix_menu">
      <option value=" ">choix du menu</option>
      <?php
      if (is_array($menu) && count($menu) > 0) {
        foreach ($menu as $key => $value) {
      ?>
          <option value="<?= $value["code_menu"] ?>"><?= $value["nom_menu"] ?></option>
      <?php
        }
      }
      ?>
    </select>
    <?php
    if (isset($error["choix_menu"])) { ?>
      <p><?php echo $error["choix_menu"]; ?></p>
    <?php } ?>
    <label for="commentaires">Commentaires :</label>
    <textarea id="commentaires" name="commentaires" rows="4" cols="50"></textarea>
    <?php
    if (isset($error["commentaires"])) { ?>
      <p><?php echo $error["commentaires"]; ?></p>
    <?php } ?>
    <input type="submit" name="Réserver" value="Réserver">
    <a href="index.php?annuler_reservation" class="annuler_reservation">Annuler une réservation</a>
  </form>

</main>
