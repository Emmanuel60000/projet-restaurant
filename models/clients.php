<?php

class Clients extends Database {
    private $code_clients;
    private $nom_clients;
    private $prenom_clients;
    private $mail_clients;
    private $telephone_clients;
  
    

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
    

    public function insert_clients()
    {
        $insertion = $this->pdo->prepare("INSERT INTO reservation(code_clients,nom_clients,prenom_clients,mail_clients
    ,telephone_clients)
      VALUES(?,?,?,?,?,?) ");
      $insertion->bindValue(1, $this->code_clients, PDO::PARAM_INT);
        $insertion->bindValue(2, $this->nom_clients, PDO::PARAM_STR);
        $insertion->bindValue(3, $this->prenom_clients, PDO::PARAM_STR);
        $insertion->bindValue(4, $this->mail_clients, PDO::PARAM_STR);
        $insertion->bindValue(5, $this->telephone_clients, PDO::PARAM_INT);
       
        
        $insertion->execute();
    }
    public function verif()
    {
        $nbuser = $this->pdo->prepare("SELECT mail_clients,nom_clients FROM clients  WHERE mail_clients = ? OR nom_clients=? ");
        $nbuser->bindValue(1, $this->mail_clients, PDO::PARAM_STR);
        $nbuser->bindValue(2, $this->nom_clients, PDO::PARAM_STR);
        $nbuser->execute();
        return $nbuser->fetch(PDO::FETCH_ASSOC);
    }
    
}