<?php

$ajouterMenu = new Menus();

if (isset($_POST['ajouterMenu'])) {
    $error = [];
    if (isset($_POST['type_menu']) && !empty($_POST['type_menu'])) {
        $type_menu =  htmlspecialchars($_POST['type_menu']);
    } else {
        $error['type_menu'] = "Erreur type_menu vide";
    }
    if (isset($_POST['nom_menu']) && !empty($_POST['nom_menu'])) {
        $nom_menu =  htmlspecialchars($_POST['nom_menu']);
    } else {
        $error['nom_menu'] = "Erreur nom_menu vide";
    }
    if (isset($_POST['description_menu']) && !empty($_POST['description_menu'])) {
        $description_menu =  htmlspecialchars($_POST['description_menu']);
    } else {
        $error['description_menu'] = "Erreur description_menu vide";
    }
    if (isset($_POST['prix_menu']) && !empty($_POST['prix_menu'])) {
        if (strpos($_POST['prix_menu'], '€') !== false || $_POST['prix_menu'] === 'EUR') {
            $prix_menu = htmlspecialchars($_POST['prix_menu']);
        } else {
            $error['prix_menu'] = "Le prix doit être en euro (€)";
        }
    } else {
        $error['prix_menu'] = "Erreur prix_menu vide";
    }
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = "views/assets/img/" . $image_name;

        // Déplacer l'image vers le dossier de destination
        if (move_uploaded_file($image_tmp, $image_path)) {
            $ajouterMenu->setPhoto_menu($image_path);
        } else {
            $error['image'] = "Erreur lors du téléchargement de l'image";
        }
    }
    if (empty($error)) {

        $ajouterMenu->setType_menu($type_menu);
        $ajouterMenu->setNom_menu($nom_menu);
        $ajouterMenu->setDescription_menu($description_menu);
        $ajouterMenu->setPrix_menu($prix_menu);

        $ajouterMenu->ajouterMenu();
    }
}
$ajouterfournisseurs = new Fournisseurs();

if (isset($_POST['ajouterFournisseurs'])) {
    $error = [];
    if (isset($_POST['nom_fournisseurs']) && !empty($_POST['nom_fournisseurs'])) {
        $nom_fournisseurs =  htmlspecialchars($_POST['nom_fournisseurs']);
    } else {
        $error['nom_fournisseurs'] = "Erreur nom_fournisseurs vide";
    }
    if (isset($_POST['adresse_fournisseurs']) && !empty($_POST['adresse_fournisseurs'])) {
        $adresse_fournisseurs =  htmlspecialchars($_POST['adresse_fournisseurs']);
    } else {
        $error['adresse_fournisseurs'] = "Erreur adresse_fournisseurs vide";
    }
    if (isset($_POST['telephone_fournisseurs']) && !empty($_POST['telephone_fournisseurs'])) {
        $telephone_fournisseurs =  htmlspecialchars($_POST['telephone_fournisseurs']);
    } else {
        $error['telephone_fournisseurs'] = "Erreur telephone_fournisseurs vide";
    }
    if (empty($error)) {
        $ajouterfournisseurs->setNom_fournisseurs($nom_fournisseurs);
        $ajouterfournisseurs->setAdresse_fournisseurs($adresse_fournisseurs);
        $ajouterfournisseurs->setTelephone_fournisseurs($telephone_fournisseurs);
        $ajouterfournisseurs->ajouterFournisseurs();
    }
}


$ajouterProduits = new Produits();
if (isset($_POST['ajouterproduits'])) {
    $error = [];
    if (isset($_POST['nom_produits']) && !empty($_POST['nom_produits'])) {
        $nom_produits =  htmlspecialchars($_POST['nom_produits']);
    } else {
        $error['nom_produits'] = "Erreur nom_produits vide";
    }

    if (isset($_POST['prix_produits']) && !empty($_POST['prix_produits'])) {
        $prix_produits =  htmlspecialchars($_POST['prix_produits']);
    } else {
        $error['prix_produits'] = "Erreur prix_produits vide";
    }
    if (empty($error)) {
        $ajouterProduits->setNom_produits($nom_produits);
        $ajouterProduits->setPrix_produits($prix_produits);
        $ajouterProduits->ajouterProduits();
    }
}
$ajouterLivraison = new Livrer();
if (isset($_POST['ajouterlivraison'])) {
    $error = [];
    if (isset($_POST['code_produits']) && !empty($_POST['code_produits'])) {
        $code_produits =  htmlspecialchars($_POST['code_produits']);
    } else {
        $error['code_produits'] = "Erreur code_produits vide";
    }
    if (isset($_POST['code_fournisseurs']) && !empty($_POST['code_fournisseurs'])) {
        $code_fournisseurs =  htmlspecialchars($_POST['code_fournisseurs']);
    } else {
        $error['code_fournisseurs'] = "Erreur code_fournisseurs vide";
    }
    if (isset($_POST['date_livraison']) && !empty($_POST['date_livraison'])) {
        $date_livraison =  htmlspecialchars($_POST['date_livraison']);
    } else {
        $error['date_livraison'] = "Erreur date_livraison vide";
    }
    if (isset($_POST['quantite_livraison']) && !empty($_POST['quantite_livraison'])) {
        $quantite_livraison =  htmlspecialchars($_POST['quantite_livraison']);
    } else {
        $error['quantite_livraison'] = "Erreur quantite_livraison vide";
    }
    if (empty($error)) {

        $ajouterLivraison->setCode_produits($code_produits);
        $ajouterLivraison->setCode_fournisseurs($code_fournisseurs);
        $ajouterLivraison->setDate_livraison($date_livraison);
        $ajouterLivraison->setQuantite_livraison($quantite_livraison);
        $ajouterLivraison->ajouterLivraison();
    }
}





if (isset($_POST["deconnexion"])) {
    session_destroy();
    header("Location:index.php?Acceuil");
}