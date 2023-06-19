<?php
class Reservation extends Database // Classe "Reservation" qui étend une autre classe appelée "Database"
{
    private $date_creat_reservation; // Date de création de la réservation
    private $code_menu; // Code du menu associé à la réservation
    private $code_clients; // Code du client associé à la réservation

    private $date_reservation; // Date de la réservation
    private $nombredepersonne_reservation; // Nombre de personnes pour la réservation
    private $heure_reservation; // Heure de la réservation
    private $commentaires; // Commentaires sur la réservation
// Les setters (méthodes "set") et getters (méthodes "get") sont des méthodes utilisées
//  pour accéder aux propriétés d'une classe depuis l'extérieur de celle-ci. 
//  Ils permettent de lire et de modifier les valeurs des propriétés privées d'un objet.
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
        // Prépare la requête d'insertion
        $insertion = $this->pdo->prepare("INSERT INTO reservation(code_clients, code_menu, date_reservation, nombredepersonne_reservation, heure_reservation, commentaires) VALUES(?, ?, ?, ?, ?, ?)");
        
        // Lie les valeurs des propriétés aux paramètres de la requête
        $insertion->bindValue(1, $this->code_clients, PDO::PARAM_INT);
        $insertion->bindValue(2, $this->code_menu, PDO::PARAM_INT);
        $insertion->bindValue(3, $this->date_reservation, PDO::PARAM_STR);
        $insertion->bindValue(4, $this->nombredepersonne_reservation, PDO::PARAM_INT);
        $insertion->bindValue(5, $this->heure_reservation, PDO::PARAM_STR);
        $insertion->bindValue(6, $this->commentaires, PDO::PARAM_STR);
        
        // Exécute la requête d'insertion
        $insertion->execute();
    }

    public function delete()
    {
        // Prépare la requête de suppression
        $delete = $this->pdo->prepare("DELETE FROM reservation WHERE date_creat_reservation = ?");
        
        // Lie la valeur de la propriété à un paramètre de la requête
        $delete->bindValue(1, $this->date_creat_reservation, PDO::PARAM_STR);
        
        // Exécute la requête de suppression
        $delete->execute();
    }
    
}