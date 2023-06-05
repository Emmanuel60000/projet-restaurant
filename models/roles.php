<?php

class Roles extends Database
{
    private $code;
    private $nom;

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        return $this->code = $code;
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
 