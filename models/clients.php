<?php

class Clients extends Database {
    private $code_clients;
    private $nom_clients;
    private $prenom_clients;
    private $mail_clients;
    private $telephone_clients;
    private $DDN_clients;
    private $adresse_clients;
    private $habitudes_clients;
    

    public function getCode_clients()
    {
        return $this->code_clients;
    }
    public function setCode_clients($code_clients)
    {
        return $this->code_clients = $code_clients;
    }
    public function getNom_clients()
    {
        return $this->nom_clients;
    }
    public function setNom_clients($nom_clients)
    {
        return $this->nom_clients = $nom_clients;
    }
    public function getPrenom_clients()
    {
        return $this->prenom_clients;
    }
    public function setPrenom_clients($prenom_clients)
    {
        return $this->prenom_clients = $prenom_clients;
    }
    public function getMail_clients()
    {
        return $this->mail_clients;
    }
    public function setMail_clients($mail_clients)
    {
        return $this->mail_clients = $mail_clients;
    }
    public function getTelephone_clients()
    {
        return $this->telephone_clients;
    }
    public function setTelephone_clients($telephone_clients)
    {
        return $this->telephone_clients = $telephone_clients;
    }
    public function getDDN_clients()
    {
        return $this->DDN_clients;
    }
    public function setDDN_clients($DDN_clients)
    {
        return $this->DDN_clients = $DDN_clients;
    }
    public function getAdresse_clients()
    {
        return $this->adresse_clients;
    }
    public function setAdresse_clients($adresse_clients)
    {
        return $this->adresse_clients = $adresse_clients;
    }
    public function getHabitudes_clients()
    {
        return $this->habitudes_clients;
    }
    public function setHabitudes_clients($habitudes_clients)
    {
        return $this->habitudes_clients = $habitudes_clients;
    }
    
}