<?php
$menu_entrees = new Menus();
$menuList = $menu_entrees->menu_entrees()
?>

<body>

  <h1 class="menu-h1">Menu du Barrio Alto</h1>
  <h2 class="menu-h2">Entrées</h2>
  <?php
  foreach ($menuList as $cle => $valeur) { ?>
    <div class="menu-item">
      <img src="<?php echo $valeur["photo_menu"] ?>">
      <h3><?php echo $valeur["nom_menu"] ?></h3>
      <p><?php echo $valeur["description_menu"] ?></p>
      <span class="price"><?php echo $valeur["prix_menu"] ?> €</span>
      <br>
      <?php if (isset($_SESSION['donnees']) && $_SESSION['donnees'][0]["code_roles"] === 1) { ?>
        <form method="POST" action="">
          <button value="<?php echo $valeur["code_menu"] ?>" type="submit" name="delete" >supprimer</button>
        </form>
      <?php } ?>
    </div>
  <?php  } ?>