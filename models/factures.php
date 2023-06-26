<?php

class Factures extends Database {
    private $code_factures;
    private $montant_factures;
    private $date_factures;
    private $code_clients;
    private $code_fournisseurs;
    private $code_moyendepaiement;

    public function getCode_factures()
    {
        return $this->code_factures;
    }
    public function setCode_factures($code_factures)
    {
        return $this->code_factures = $code_factures;
    }
    public function getMontant_factures()
    {
        return $this->montant_factures;
    }
    public function setMontant_factures($montant_factures)
    {
        return $this->montant_factures = $montant_factures;
    }
    public function getDate_factures()
    {
        return $this->date_factures;
    }
    public function setDate_factures($date_factures)
    {
        return $this->date_factures = $date_factures;
    }
    public function getCode_clients()
    {
        return $this->code_clients;
    }
    public function setCode_clients($code_clients)
    {
        return $this->code_clients = $code_clients;
    }
    public function getCode_fournisseurs()
    {
        return $this->code_fournisseurs;
    }
    public function setCode_fournisseurs($code_fournisseurs)
    {
        return $this->code_fournisseurs = $code_fournisseurs;
    }
    
    public function getCode_moyendepaiement()
    {
        return $this->code_moyendepaiement;
    }
    public function setCode_moyendepaiement($code_moyendepaiement)
    {
        return $this->code_moyendepaiement = $code_moyendepaiement;
    }
    public function ajouterFacture()
    {
        $ajouterfacture = $this->pdo->prepare("INSERT INTO factures (code_factures,montant_factures,date_factures,code_clients,code_fournisseurs,code_moyendepaiement)
      VALUES(?,?,?,?,?,?) ");
        $ajouterfacture->bindValue(1, $this->code_factures, PDO::PARAM_INT);
        $ajouterfacture->bindValue(2, $this->montant_factures, PDO::PARAM_INT);
        $ajouterfacture->bindValue(3, $this->date_factures, PDO::PARAM_STR);
        $ajouterfacture->bindValue(4, $this->code_clients, PDO::PARAM_INT);
        $ajouterfacture->bindValue(5, $this->code_fournisseurs, PDO::PARAM_INT);
        $ajouterfacture->bindValue(6, $this->code_moyendepaiement, PDO::PARAM_INT);
        $ajouterfacture->execute();
    }

}