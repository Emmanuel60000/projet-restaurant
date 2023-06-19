<?php
$menu_desserts = new Menus();
$dessertsList = $menu_desserts->menu_desserts();
?>

<body>

  <h1 class="menu-h1">Menu du Barrio Alto</h1>
  <h2 class="menu-h2">Desserts</h2>
  <?php
  foreach ($dessertsList as $cle => $valeur) { ?>
    <div class="menu-item">
      <img src="<?= htmlspecialchars($valeur["photo_menu"]) ?>">
      <h3><?= htmlspecialchars($valeur["nom_menu"]) ?></h3>
      <p><?= htmlspecialchars($valeur["description_menu"]) ?></p>
      <span class="price"><?= htmlspecialchars($valeur["prix_menu"]) ?>€</span>
      <?php if (isset($_SESSION['donnees']) && $_SESSION['donnees'][0]["code_roles"] === 1) { ?>
        <form method="POST" action="">
          <button value="<?= htmlspecialchars($valeur["code_menu"]) ?>" type="submit" name="delete">supprimer</button>
        </form>
      <?php } ?>
    </div>
  <?php  } ?>