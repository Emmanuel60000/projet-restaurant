<?php
$menu_entrees = new Menus();
$menuList = $menu_entrees->menu_entrees();

if (isset($_POST["delete"])) {
    $menu_entrees->setCode_menu($_POST['delete']);
    $menu_entrees->supprimerMenu();
    header("Location:index.php?menu_entrees");
}
