<?php

class Reservation extends Database
{
    private $date_creat_reservation;
    private $code_menu;
    private $code_clients;

    private $date_reservation;
    private $nombredepersonne_reservation;
    private $heure_reservation;
    private $commentaires;

    public function getDate_creat_reservation()
    {
        return $this->date_creat_reservation;
    }
    public function setDate_creat_reservation($date_creat_reservation)
    {
        return $this->date_creat_reservation = $date_creat_reservation;
    }
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

    public function insert_reservation()
    {
        $insertion = $this->pdo->prepare("INSERT INTO reservation(code_clients,code_menu
    ,date_reservation,nombredepersonne_reservation,heure_reservation,commentaires)
      VALUES(?,?,?,?,?,?) ");
        $insertion->bindValue(1, $this->code_clients, PDO::PARAM_INT);
        $insertion->bindValue(2, $this->code_menu, PDO::PARAM_INT);
        $insertion->bindValue(3, $this->date_reservation, PDO::PARAM_STR);
        $insertion->bindValue(4, $this->nombredepersonne_reservation, PDO::PARAM_INT);
        $insertion->bindValue(5, $this->heure_reservation, PDO::PARAM_STR);
        $insertion->bindValue(6, $this->commentaires, PDO::PARAM_STR);
        $insertion->execute();
    }

    // public function recup_reservation()
    // {

    //     $recup = $this->pdo->prepare("SELECT date_creat_reservation,code_clients,code_menu
    // ,date_reservation,nombredepersonne_reservation,heure_reservation,commentaires");
    //     $recup->bindValue(1, $this->date_creat_reservation, PDO::PARAM_INT);
    //     $recup->bindValue(1, $this->code_clients, PDO::PARAM_INT);
    //     $recup->bindValue(2, $this->code_menu, PDO::PARAM_INT);
    //     $recup->bindValue(3, $this->date_reservation, PDO::PARAM_STR);
    //     $recup->bindValue(4, $this->nombredepersonne_reservation, PDO::PARAM_INT);
    //     $recup->bindValue(5, $this->heure_reservation, PDO::PARAM_STR);
    //     $recup->bindValue(6, $this->commentaires, PDO::PARAM_STR);
    //     $recup_reservation=$recup;
    //     $recup_reservation->execute();
    //     return $recup_reservation->fetchAll(PDO::FETCH_ASSOC);

    // }
}
