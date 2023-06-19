<?php

class Clients extends Database
{
    private $code_clients;
    private $nom_clients;
    private $prenom_clients;
    private $mail_clients;
    private $telephone_clients;
    private $mot_de_passe;
    private $code_roles;

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
    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }
    public function setMot_de_passe($mot_de_passe)
    {
        return $this->mot_de_passe = $mot_de_passe;
    }
    public function getCode_roles()
    {
        return $this->code_roles;
    }
    public function setCode_roles($code_roles)
    {
        return $this->code_roles = $code_roles;
    }

    public function insert_clients()
    {
        $insertion = $this->pdo->prepare("INSERT INTO clients(nom_clients,prenom_clients,mail_clients,telephone_clients,mot_de_passe) VALUES(?,?,?,?,?)");

        $insertion->bindValue(1, $this->nom_clients, PDO::PARAM_STR);
        $insertion->bindValue(2, $this->prenom_clients, PDO::PARAM_STR);
        $insertion->bindValue(3, $this->mail_clients, PDO::PARAM_STR);
        $insertion->bindValue(4, $this->telephone_clients, PDO::PARAM_STR);
        $insertion->bindValue(5, $this->mot_de_passe, PDO::PARAM_STR);

        $insertion->execute();
    }
    public function verif()
    {
        $nbuser = $this->pdo->prepare("SELECT code_clients,mail_clients,nom_clients FROM clients  WHERE mail_clients = ? OR nom_clients=? ");
        $nbuser->bindValue(1, $this->mail_clients, PDO::PARAM_STR);
        $nbuser->bindValue(2, $this->nom_clients, PDO::PARAM_STR);
        $nbuser->execute();
        return $nbuser->fetch(PDO::FETCH_ASSOC);
    }
    public function connexion()
    {

        $annuler_reservation = $this->pdo->prepare("SELECT nom_clients,prenom_clients,mail_clients,mot_de_passe,code_roles FROM clients  WHERE  mail_clients =?");
        $annuler_reservation->bindValue(1, $this->mail_clients, PDO::PARAM_STR);        
        $annuler_reservation->execute();
        return $annuler_reservation->fetchAll(PDO::FETCH_ASSOC);
    }
    public function annuler_reservation()
    {

        $annuler_reservation = $this->pdo->prepare("SELECT nom_clients,prenom_clients,mail_clients,date_creat_reservation,code_menu,clients.code_clients
         ,date_reservation,nombredepersonne_reservation,heure_reservation,commentaires FROM clients INNER JOIN reservation ON clients.code_clients=reservation.code_clients WHERE nom_clients = ? AND prenom_clients =? AND mail_clients =?");
        $annuler_reservation->bindValue(1, $this->nom_clients, PDO::PARAM_STR);
        $annuler_reservation->bindValue(2, $this->prenom_clients, PDO::PARAM_STR);
        $annuler_reservation->bindValue(3, $this->mail_clients, PDO::PARAM_STR);
        $annuler_reservation->execute();
        return $annuler_reservation->fetchAll(PDO::FETCH_ASSOC);
    }
}
