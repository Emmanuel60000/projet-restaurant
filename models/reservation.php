<?php

class Reservation extends Database
{
    private $code_menu;
    private $code_clients;
    private $nom_clients;
    private $mail_clients;
    private $date_reservation;
    private $nombredepersonne_reservation;
    private $heure_reservation;
    private $commentaires;

    public function getCode_menu()
    {
        return $this->code_menu;
    }
    public function setCode_menu($code_menu)
    {
        return $this->code_menu = $code_menu;
    }
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
    public function getMail_clients()
    {
        return $this->mail_clients;
    }
    public function setMail_clients($mail_clients)
    {
        return $this->mail_clients = $mail_clients;
    }
    public function getDate_reservation()
    {
        return $this->date_reservation;
    }
    public function setDate_reservation($date_reservation)
    {
        return $this->date_reservation = $date_reservation;
    }
    public function getNombredepersonne_reservation()
    {
        return $this->nombredepersonne_reservation;
    }
    public function setNombredepersonne_reservation($nombredepersonne_reservation)
    {
        return $this->nombredepersonne_reservation = $nombredepersonne_reservation;
    }
    public function getHeure_reservation()
    {
        return $this->heure_reservation;
    }
    public function setHeure_reservation($heure_reservation)
    {
        return $this->heure_reservation = $heure_reservation;
    }
    public function getCommentaires()
    {
        return $this->commentaires;
    }
    public function setCommentaires($commentaires)
    {
        return $this->commentaires = $commentaires;
    }

    public function insert()
    {
        $insertion = $this->pdo->prepare("INSERT INTO reservation(nom_clients,mail_clients
    ,date_reservation,nombredepersonne_reservation,heure_reservation,commentaires)
      VALUES(?,?,?,?,?,?) ");
        $insertion->bindValue(1, $this->nom_clients, PDO::PARAM_STR);
        $insertion->bindValue(2, $this->mail_clients, PDO::PARAM_STR);
        $insertion->bindValue(3, $this->date_reservation, PDO::PARAM_INT);
        $insertion->bindValue(4, $this->nombredepersonne_reservation, PDO::PARAM_INT);
        $insertion->bindValue(5, $this->heure_reservation, PDO::PARAM_INT);
        $insertion->bindValue(6, $this->commentaires, PDO::PARAM_STR);
        $insertion->execute();
    }
    public function verif()
    {
        $nbuser = $this->pdo->prepare("SELECT mail_clients,nom_clients FROM reservation  WHERE mail_clients = ? OR nom_clients=? ");
        $nbuser->bindValue(1, $this->mail_clients, PDO::PARAM_STR);
        $nbuser->bindValue(2, $this->nom_clients, PDO::PARAM_STR);
        $nbuser->execute();
        return $nbuser->fetch(PDO::FETCH_ASSOC);
    }
}
