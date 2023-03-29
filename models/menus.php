<?php 

class Menus extends Database{
    private $code_menu;
    private $nom_menu;
    private $type_menu;
    private $description_menu;
    private $prix_menu;

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
    public function choix_menu(){
        $choix_menu = $this->pdo->query("SELECT * FROM menus WHERE type_menu='plats'");
        return $choix_menu->fetchAll(PDO::FETCH_ASSOC);
    }
   

}