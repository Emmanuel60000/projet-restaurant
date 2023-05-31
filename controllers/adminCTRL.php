<?php

$ajouterMenu=new Menus();

if (isset($_POST['ajouterMenu'])) {
    $erreur = [];
    if (isset($_POST['type_menu']) && !empty($_POST['type_menu'])) {
        $type_menu =  $_POST['type_menu'];
    } else {
        $erreur['type_menu'] = "Erreur type_menu vide";
    }
    if (isset($_POST['nom_menu']) && !empty($_POST['nom_menu'])) {
        $nom_menu =  $_POST['nom_menu'];
    } else {
        $erreur['nom_menu'] = "Erreur nom_menu vide";
    }
    if (isset($_POST['description_menu']) && !empty($_POST['description_menu'])) {
        $description_menu =  $_POST['description_menu'];
    } else {
        $erreur['description_menu'] = "Erreur description_menu vide";
    }
    if (isset($_POST['prix_menu']) && !empty($_POST['prix_menu'])) {
        $prix_menu =  $_POST['prix_menu'];
    } else {
        $erreur['prix_menu'] = "Erreur prix_menu vide";
    }
    if (empty($erreur)) {

        $ajouterMenu->setType_menu($type_menu);
        $ajouterMenu->setNom_menu($nom_menu);
        $ajouterMenu->setDescription_menu($description_menu);
        $ajouterMenu->setPrix_menu($prix_menu);

        $ajouterMenu->ajouterMenu();

        
    }
}
$ajouterfournisseurs=new Fournisseurs();

if (isset($_POST['ajouterFournisseurs'])) {
    $erreur = [];
    if (isset($_POST['nom_fournisseurs']) && !empty($_POST['nom_fournisseurs'])) {
        $nom_fournisseurs =  $_POST['nom_fournisseurs'];
    } else {
        $erreur['nom_fournisseurs'] = "Erreur nom_fournisseurs vide";
    }
    if (isset($_POST['adresse_fournisseurs']) && !empty($_POST['adresse_fournisseurs'])) {
        $adresse_fournisseurs =  $_POST['adresse_fournisseurs'];
    } else {
        $erreur['adresse_fournisseurs'] = "Erreur adresse_fournisseurs vide";
    }
    if (isset($_POST['telephone_fournisseurs']) && !empty($_POST['telephone_fournisseurs'])) {
        $telephone_fournisseurs =  $_POST['telephone_fournisseurs'];
    } else {
        $erreur['telephone_fournisseurs'] = "Erreur telephone_fournisseurs vide";
    }
    if (empty($erreur)) {
        $ajouterfournisseurs->setNom_fournisseurs($nom_fournisseurs);
        $ajouterfournisseurs->setAdresse_fournisseurs($adresse_fournisseurs);
        $ajouterfournisseurs->setTelephone_fournisseurs($telephone_fournisseurs);
        $ajouterfournisseurs->ajouterFournisseurs();
    }
}

$ajouterLivraison= new Livrer();
$ajouterProduits=new Produits();
if (isset($_POST['ajouterLivraison'])) {
    $erreur = [];
    if (isset($_POST['nom_produits']) && !empty($_POST['nom_produits'])) {
        $nom_produits =  $_POST['nom_produits'];
    } else {
        $erreur['nom_produits'] = "Erreur nom_produits vide";
    }
    if (isset($_POST['date_livraison']) && !empty($_POST['date_livraison'])) {
        $date_livraison =  $_POST['date_livraison'];
    } else {
        $erreur['date_livraison'] = "Erreur date_livraison vide";
    }
    if (isset($_POST['quantite_livraison']) && !empty($_POST['quantite_livraison'])) {
        $quantite_livraison =  $_POST['quantite_livraison'];
    } else {
        $erreur['quantite_livraison'] = "Erreur quantite_livraison vide";
    }
    if (isset($_POST['prix_produits']) && !empty($_POST['prix_produits'])) {
        $prix_produits =  $_POST['prix_produits'];
    } else {
        $erreur['prix_produits'] = "Erreur prix_produits vide";
    }
    if (empty($erreur)) { 
        $ajouterProduits->setNom_produits($nom_produits);
        $ajouterProduits->setPrix_produits($prix_produits);
        $ajouterProduits->ajouterProduits();
        $ajouterLivraison->setDate_livraison($date_livraison);
        $ajouterLivraison->setQuantite_livraison($quantite_livraison);
        $ajouterLivraison->ajouterLivraison();
    }

}