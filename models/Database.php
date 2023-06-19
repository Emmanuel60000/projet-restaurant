<?php

class Database {
    // Définit une classe appelée Database qui encapsule les fonctionnalités de la base de données.
    protected $pdo;
    //  Déclare une propriété protégée $pdo pour stocker l'objet PDO représentant la connexion à la base de données.
    public function __construct() {
        // Définit la méthode constructeur de la classe. Cette méthode est appelée automatiquement lorsqu'une nouvelle instance de la classe Database est créée.
        try {
            // Débute un bloc d'essai pour gérer les exceptions potentielles lors de la connexion à la base de données.
            $this->pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, LOGIN, PASSWORD);
            // Crée une nouvelle instance de la classe PDO et la stocke dans la propriété $pdo. Cette ligne établit la connexion à la base de données en utilisant les constantes HOST, DBNAME, LOGIN et PASSWORD. Assurez-vous de définir ces constantes avec les valeurs appropriées avant d'utiliser cette classe.
            
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Modifie un attribut de l'objet PDO. Cette ligne définit le mode de gestion des erreurs sur "PDO::ERRMODE_EXCEPTION", ce qui signifie que PDO lancera une exception en cas d'erreur lors de l'exécution des requêtes SQL.
        } catch(Exception $ex) {
            // Capture une éventuelle exception lancée lors de la connexion à la base de données.
            $ex->getMessage();
            // Cette ligne appelle la méthode getMessage() sur l'objet d'exception $ex. Cependant, le message d'erreur obtenu n'est pas utilisé ou stocké dans ce code. Vous pouvez ajouter une logique supplémentaire pour traiter l'erreur ou l'afficher de manière appropriée.
        }
    }
}