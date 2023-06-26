<?php

$ajouterMenu = new Menus();

if (isset($_POST['ajouterMenu'])) {
    $error = [];

    if (isset($_POST['type_menu']) && !empty($_POST['type_menu'])) {
        $type_menu =  htmlspecialchars($_POST['type_menu']);
        // Vérification du format du type de menu
        if (!preg_match("/^[a-zA-Z0-9\s]+$/", $type_menu)) {
            $error['type_menu'] = "Le type de menu ne doit contenir que des lettres alphabétiques, des chiffres et des espaces";
        }
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
        $prix_menu = htmlspecialchars($_POST['prix_menu']);
        // Vérification du format du prix du menu
        if (!preg_match("/^\d+(\.\d{1,2})?€$/", $prix_menu)) {
            $erreur['prix_menu'] = "Le prix doit être au format euro (€) avec au maximum 2 décimales";
        }
    } else {
        $error['prix_menu'] = "Erreur prix_menu vide";
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = "views/assets/img/" . $image_name;

        // Vérifier si le fichier est une image
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($image_extension, $allowed_extensions)) {
            $error['image'] = "Le fichier doit être une image (jpg, jpeg, png, gif)";
        }

        // Vérifier la taille de l'image (maximum 5 Mo)
        $max_file_size = 5 * 1024 * 1024; // 5 Mo en octets

        if ($_FILES['image']['size'] > $max_file_size) {
            $error['image'] = "La taille de l'image ne peut pas dépasser 5 Mo";
        }

        // Déplacer l'image vers le dossier de destination si toutes les conditions sont remplies
        if (empty($error)) {
            if (move_uploaded_file($image_tmp, $image_path)) {
                $ajouterMenu->setPhoto_menu($image_path);
            } else {
                $error['image'] = "Erreur lors du téléchargement de l'image";
            }
        }
    }

    // Vérifier les erreurs avant d'effectuer l'ajout du menu
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
        // Vérification du format du nom du fournisseur
        if (!preg_match("/^[a-zA-Z ]+$/", $nom_fournisseurs)) {
            $error['nom_fournisseurs'] = "Le nom du fournisseur ne doit contenir que des lettres alphabétiques et des espaces";
        }
    } else {
        $error['nom_fournisseurs'] = "Erreur nom_fournisseurs vide";
    }

    if (isset($_POST['adresse_fournisseurs']) && !empty($_POST['adresse_fournisseurs'])) {
        $adresse_fournisseurs =  htmlspecialchars($_POST['adresse_fournisseurs']);
        // Vérification de la longueur de l'adresse du fournisseur
        if (strlen($adresse_fournisseurs) < 5 || strlen($adresse_fournisseurs) > 100) {
            $error['adresse_fournisseurs'] = "L'adresse du fournisseur doit contenir entre 5 et 100 caractères";
        }
    } else {
        $error['adresse_fournisseurs'] = "Erreur adresse_fournisseurs vide";
    }

    if (isset($_POST['telephone_fournisseurs']) && !empty($_POST['telephone_fournisseurs'])) {
        $telephone_fournisseurs =  htmlspecialchars($_POST['telephone_fournisseurs']);

        // Vérification du format du numéro de téléphone
        if (!preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $telephone_fournisseurs)) {
            $error['telephone_fournisseurs'] = "Le format du numéro de téléphone est invalide";
        }
    } else {
        $error['telephone_fournisseurs'] = "Erreur telephone_fournisseurs vide";
    }

    // Vérifier les erreurs avant d'effectuer l'ajout du fournisseur
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
        // Vérification du format du nom du produit
        if (!preg_match("/^[a-zA-Z ]+$/", $nom_produits)) {
            $error['nom_produits'] = "Le nom du produit ne doit contenir que des lettres alphabétiques et des espaces";
        }
    } else {
        $error['nom_produits'] = "Erreur nom_produits vide";
    }

    if (isset($_POST['prix_produits']) && !empty($_POST['prix_produits'])) {
        $prix_produits =  htmlspecialchars($_POST['prix_produits']);
        // Vérification du format du prix du produit
        if (!is_numeric($prix_produits)) {
            $error['prix_produits'] = "Le prix du produit doit être un nombre";
        }
    } else {
        $error['prix_produits'] = "Erreur prix_produits vide";
    }

    // Vérifier les erreurs avant d'effectuer l'ajout du produit
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
        // Vérification du format du code produit
        if (!preg_match("/^[a-zA-Z0-9]+$/", $code_produits)) {
            $error['code_produits'] = "Le code du produit ne doit contenir que des lettres alphabétiques et des chiffres";
        }
    } else {
        $error['code_produits'] = "Erreur code_produits vide";
    }

    if (isset($_POST['code_fournisseurs']) && !empty($_POST['code_fournisseurs'])) {
        $code_fournisseurs =  htmlspecialchars($_POST['code_fournisseurs']);
        // Vérification du format du code fournisseur
        if (!preg_match("/^[a-zA-Z0-9]+$/", $code_fournisseurs)) {
            $error['code_fournisseurs'] = "Le code du fournisseur ne doit contenir que des lettres alphabétiques et des chiffres";
        }
    } else {
        $error['code_fournisseurs'] = "Erreur code_fournisseurs vide";
    }

    if (isset($_POST['date_livraison']) && !empty($_POST['date_livraison'])) {
        $date_livraison =  htmlspecialchars($_POST['date_livraison']);
        // Vérification du format de la date de livraison
        if (!strtotime($date_livraison)) {
            $error['date_livraison'] = "La date de livraison n'est pas valide";
        }
    } else {
        $error['date_livraison'] = "Erreur date_livraison vide";
    }

    if (isset($_POST['quantite_livraison']) && !empty($_POST['quantite_livraison'])) {
        $quantite_livraison =  htmlspecialchars($_POST['quantite_livraison']);
        // Vérification du format de la quantité de livraison
        if (!is_numeric($quantite_livraison)) {
            $error['quantite_livraison'] = "La quantité de livraison doit être un nombre";
        }
    } else {
        $error['quantite_livraison'] = "Erreur quantite_livraison vide";
    }

    // Vérifier les erreurs avant d'effectuer l'ajout de la livraison
    if (empty($error)) {
        $ajouterLivraison->setCode_produits($code_produits);
        $ajouterLivraison->setCode_fournisseurs($code_fournisseurs);
        $ajouterLivraison->setDate_livraison($date_livraison);
        $ajouterLivraison->setQuantite_livraison($quantite_livraison);

        $ajouterLivraison->ajouterLivraison();
    }
}


$ajouterFactures = new Factures();

if (isset($_POST['ajouterfacture'])) {
    $error = [];

    // if (isset($_POST['code_factures']) && !empty($_POST['code_factures'])) {
    //     $code_factures =  htmlspecialchars($_POST['code_factures']);
    // } else {
    //     $error['code_factures'] = "Erreur code_factures vide";
    // }  
    if (isset($_POST['montant_factures']) && !empty($_POST['montant_factures'])) {
        $montant_factures =  htmlspecialchars($_POST['montant_factures']);
    } else {
        $error['montant_factures'] = "Erreur montant_factures vide";
    }
    if (isset($_POST['date_factures']) && !empty($_POST['date_factures'])) {
        $date_factures =  htmlspecialchars($_POST['date_factures']);
    } else {
        $error['date_factures'] = "Erreur date_factures vide";
    }
    if (isset($_POST['code_clients']) && !empty($_POST['code_clients'])) {
        $code_clients =  htmlspecialchars($_POST['code_clients']);
    } else {
        $error['code_clients'] = "Erreur code_clients vide";
    }
    if (isset($_POST['code_fournisseurs']) && !empty($_POST['code_fournisseurs'])) {
        $code_fournisseurs =  htmlspecialchars($_POST['code_fournisseurs']);
    } else {
        $error['code_fournisseurs'] = "Erreur code_fournisseurs vide";
    }
    if (isset($_POST['code_moyendepaiement']) && !empty($_POST['code_moyendepaiement'])) {
        $code_moyendepaiement =  htmlspecialchars($_POST['code_moyendepaiement']);
    } else {
        $error['code_moyendepaiement'] = "Erreur code_moyendepaiement vide";
    }

    if (empty($error)) {
        // $ajouterFactures->setCode_factures($code_factures);
        $ajouterFactures->setMontant_factures($montant_factures);
        $ajouterFactures->setDate_factures($date_factures);
        $ajouterFactures->setCode_clients($code_clients);
        $ajouterFactures->setCode_fournisseurs($code_fournisseurs);
        $ajouterFactures->setCode_moyendepaiement($code_moyendepaiement);

        $ajouterFactures->ajouterFacture();
    }
}


if (isset($_POST["deconnexion"])) {
    session_destroy();
    header("Location:index.php?Acceuil");
}