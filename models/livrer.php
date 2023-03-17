<?php 

class Livrer extends Database{

    private $code_produits;
    private $code_fournisseurs;
    private $date_livraison;
    private $quantite_livraison;

    public function getCode_produits()
    {
        return $this->code_produits;
    }
    public function setCode_produits($code_produits)
    {
        return $this->code_produits = $code_produits;
    }
    public function getCode_fournisseurs()
    {
        return $this->code_fournisseurs;
    }
    public function setCode_fournisseurs($code_fournisseurs)
    {
        return $this->code_fournisseurs = $code_fournisseurs;
    }
    public function getDate_livraison()
    {
        return $this->date_livraison;
    }
    public function setDate_livraison($date_livraison)
    {
        return $this->date_livraison = $date_livraison;
    }
    public function getQuantite_livraison()
    {
        return $this->quantite_livraison;
    }
    public function setQuantite_livraison($quantite_livraison)
    {
        return $this->quantite_livraison = $quantite_livraison;
    }
}