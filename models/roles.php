<?php

class Roles extends Database
{
    private $id;
    private $nom;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        return $this->nom = $nom;
    }
 }