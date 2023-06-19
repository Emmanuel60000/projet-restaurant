<?php
$menu_entrees = new Menus();
$menuList = $menu_entrees->menu_entrees();

if (isset($_POST["delete"])) {
    $menu_entrees->setCode_menu(htmlspecialchars($_POST['delete']));
    $menu_entrees->supprimerMenu();
    header("Location:index.php?menu_entrees");
}


$menu_desserts = new Menus();
$dessertsList = $menu_desserts->menu_desserts();

if (isset($_POST["delete"])) {
    $menu_desserts->setCode_menu(htmlspecialchars($_POST['delete']));
    $menu_desserts->supprimerMenu();
    header("Location:index.php?menu_entrees");
}

$menu_vins = new Menus();
$vinsList = $menu_vins->menu_vins();

if (isset($_POST["delete"])) {
    $menu_vins->setCode_menu(htmlspecialchars($_POST['delete']));
    $menu_vins->supprimerMenu();
    header("Location:index.php?menu_entrees");
}

$menu_plats = new Menus();
$platsList = $menu_plats->menu_plats();

if (isset($_POST["delete"])) {
    $menu_plats->setCode_menu(htmlspecialchars($_POST['delete']));
    $menu_plats->supprimerMenu();
    header("Location:index.php?menu_entrees");
}