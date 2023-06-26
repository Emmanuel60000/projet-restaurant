<?php 

class Moyendepaiement extends Database{
    private $code_moyendepaiement;
    private $nom_moyendepaiement;

    public function getCode_moyendepaiement()
    {
        return $this->code_moyendepaiement;
    }
    public function setCode_moyendepaiement($code_moyendepaiement)
    {
        return $this->code_moyendepaiement = $code_moyendepaiement;
    }
    public function getNom_moyendepaiement()
    {
        return $this->nom_moyendepaiement;
    }
    public function setNom_moyendepaiement($nom_moyendepaiement)
    {
        return $this->nom_moyendepaiement = $nom_moyendepaiement;
    }
}