<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
<header> -->



<h1>
  RESERVATION
</h1>
<p>
  Vous pouvez réserver une table dans notre réstaurant, nous serons ravis de vous acceuillir
  et pour cela veuillez remplir les champs ci-dessous:
</p>

</header>
<main>

  <form action="" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
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
    <input type="tel" id="telephone" name="telephone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
    <label for="date">Date :</label>
    <input type="date" id="date" name="date" required>
    <label for="heure">Heure :</label>
    <select id="heure" name="heure" required>
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
    <label for="personnes">Nombre de personnes :</label>
    <input type="number" id="personnes" name="personnes" min="1" max="10" required>
    <label for="commentaires">Commentaires :</label>
    <textarea id="commentaires" name="commentaires" rows="4" cols="50"></textarea>
    <input type="submit" name="Réserver" value="Réserver">
  </form>

</main>
</body>

</html>