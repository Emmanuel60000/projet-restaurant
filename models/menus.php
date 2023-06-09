<?php

class Menus extends Database
{
    private $code_menu;
    private $nom_menu;
    private $type_menu;
    private $description_menu;
    private $prix_menu;
    private $photo_menu;

    public function getCode_menu()
    {
        return $this->code_menu;
    }
    public function setCode_menu($code_menu)
    {
        return $this->code_menu = $code_menu;
    }
    public function getNom_menu()
    {
        return $this->nom_menu;
    }
    public function setNom_menu($nom_menu)
    {
        return $this->nom_menu = $nom_menu;
    }
    public function getType_menu()
    {
        return $this->type_menu;
    }
    public function setType_menu($type_menu)
    {
        return $this->type_menu = $type_menu;
    }
    public function getDescription_menu()
    {
        return $this->description_menu;
    }
    public function setDescription_menu($description_menu)
    {
        return $this->description_menu = $description_menu;
    }
    public function getPrix_menu()
    {
        return $this->prix_menu;
    }
    public function setPrix_menu($prix_menu)
    {
        return $this->prix_menu = $prix_menu;
    }
    public function getPhoto_menu()
    {
        return $this->photo_menu;
    }
    public function setPhoto_menu($photo_menu)
    {
        return $this->photo_menu = $photo_menu;
    }
    public function choix_menu()
    {
        $choix_menu = $this->pdo->query("SELECT * FROM menus WHERE type_menu='plats'");
        return $choix_menu->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterMenu()
    {
        $ajouterMenu = $this->pdo->prepare("INSERT INTO menus ( nom_menu, type_menu, description_menu, prix_menu,photo_menu)
      VALUES(?,?,?,?,?) ");

        $ajouterMenu->bindValue(1, $this->nom_menu, PDO::PARAM_STR);
        $ajouterMenu->bindValue(2, $this->type_menu, PDO::PARAM_STR);
        $ajouterMenu->bindValue(3, $this->description_menu, PDO::PARAM_STR);
        $ajouterMenu->bindValue(4, $this->prix_menu, PDO::PARAM_INT);
        $ajouterMenu->bindValue(5, $this->photo_menu, PDO::PARAM_STR);
        $ajouterMenu->execute();
    }
    public function menu_entrees()
    {
        $choix_menu = $this->pdo->query("SELECT * FROM menus WHERE type_menu='entrees'");
        return $choix_menu->fetchAll(PDO::FETCH_ASSOC);
    }
    public function menu_plats()
    {
        $choix_menu = $this->pdo->query("SELECT * FROM menus WHERE type_menu='plats'");
        return $choix_menu->fetchAll(PDO::FETCH_ASSOC);
    }
    public function menu_desserts()
    {
        $choix_menu = $this->pdo->query("SELECT * FROM menus WHERE type_menu='desserts'");
        return $choix_menu->fetchAll(PDO::FETCH_ASSOC);
    }
    public function menu_vins()
    {
        $choix_menu = $this->pdo->query("SELECT * FROM menus WHERE type_menu='vins'");
        return $choix_menu->fetchAll(PDO::FETCH_ASSOC);
    }
    public function supprimerMenu()
    {
        $supprimerMenu = $this->pdo->prepare("DELETE FROM menus WHERE code_menu = ?");
        $supprimerMenu->bindValue(1, $this->code_menu, PDO::PARAM_INT);
        $supprimerMenu->execute();
    }
}
