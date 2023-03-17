<?php
class Fournisseurs extends Database{

    private $code_fournisseurs;
    private $nom_fournisseurs;
    private $adresse_fournisseurs;
    private $telephone_fournisseurs;

    public function getCode_fournisseurs()
    {
        return $this->code_fournisseurs;
    }
    public function setCode_fournisseurs($code_fournisseurs)
    {
        return $this->code_fournisseurs = $code_fournisseurs;
    }
    public function getNom_fournisseurs()
    {
        return $this->nom_fournisseurs;
    }
    public function setNom_fournisseurs($nom_fournisseurs)
    {
        return $this->nom_fournisseurs = $nom_fournisseurs;
    }
    public function getAdresse_fournisseurs()
    {
        return $this->adresse_fournisseurs;
    }
    public function setAdresse_fournisseurs($adresse_fournisseurs)
    {
        return $this->adresse_fournisseurs = $adresse_fournisseurs;
    }
    public function getTelephone_fournisseurs()
    {
        return $this->telephone_fournisseurs;
    }
    public function setTelephone_fournisseurs($telephone_fournisseurs)
    {
        return $this->telephone_fournisseurs = $telephone_fournisseurs;
    }

}