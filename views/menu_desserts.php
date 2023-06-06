<?php
$menu_desserts = new Menus();
$dessertsList = $menu_desserts->menu_desserts()
?>

<body>

  <h1 class="menu-h1" >Menu du Barrio Alto</h1>
  <h2 class="menu-h2" >Desserts</h2>
  <?php
    foreach ($dessertsList as $cle => $valeur) { ?>
  <div class="menu-item">
      <img src="<?php echo $valeur["photo_menu"] ?>">
      <h3><?php echo $valeur["nom_menu"] ?></h3>
      <p><?php echo $valeur["description_menu"] ?></p>
      <span class="price"><?php echo $valeur["prix_menu"] ?>€</span>
    
  </div>
  <?php  } ?>
 