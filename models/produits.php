<?php 

class Produits extends Database{
    private $code_produits;
    private $nom_produits;
    private $prix_produits;

    public function getCode_produits()
    {
        return $this->code_produits;
    }
    public function setCode_produits($code_produits)
    {
        return $this->code_produits = $code_produits;
    }
    public function getNom_produits()
    {
        return $this->nom_produits;
    }
    public function setNom_produits($nom_produits)
    {
        return $this->nom_produits = $nom_produits;
    }
    public function getPrix_produits()
    {
        return $this->prix_produits;
    }
    public function setPrix_produits($prix_produits)
    {
        return $this->prix_produits = $prix_produits;
    }

    public function ajouterProduits()
    {
        $ajouterProduits = $this->pdo->prepare("INSERT INTO produits ( nom_produits, prix_produits)
      VALUES(?,?) ");
        
        $ajouterProduits->bindValue(1, $this->nom_produits, PDO::PARAM_STR);
        $ajouterProduits->bindValue(2, $this->prix_produits, PDO::PARAM_STR);
        $ajouterProduits->execute();
    }

}