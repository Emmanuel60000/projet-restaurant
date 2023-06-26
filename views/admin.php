<?php


if ($_SESSION['donnees'][0]["code_roles"] == 1) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page admin</title>
</head>

<body>
    <h1 class="h1_admin">Page administrateur</h1>

    <h2 class="h2_ajouter_menu">Ajouter Menu</h2>
    <form class="form_admin" method="POST" action="" enctype="multipart/form-data">

        <label class="label_admin" for="type_menu">Type du menu :</label>
        <input class="input_admin" type="text" name="type_menu" id="type_menu" >
        <?php if (isset($error["type_menu"])) { ?>
            <p><?= htmlspecialchars($error["type_menu"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="nom_menu">Nom du menu :</label>
        <input class="input_admin" type="text" name="nom_menu" id="nom_menu" >
        <?php if (isset($error["nom_menu"])) { ?>
            <p><?= htmlspecialchars($error["nom_menu"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="description_menu">Description :</label>
        <textarea class="input_admin" name="description_menu" id="description_menu" ></textarea>
        <?php if (isset($error["description_menu"])) { ?>
            <p><?= htmlspecialchars($error["description_menu"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="prix_menu">Prix :</label>
        <input class="input_admin" type="text" name="prix_menu" id="prix_menu" >
        <?php if (isset($error["prix_menu"])) { ?>
            <p><?= htmlspecialchars($error["prix_menu"]) ?></p>
        <?php } ?>
        <br>

        <label for="image">Image </label>
        <input type="file" name="image" id="image" />
        <br>
        <?php if (isset($error["image"])) { ?>
            <p><?= htmlspecialchars($error["image"]) ?></p>
        <?php } ?>
        <br>
        <input class="input_admin_submit" type="submit" name="ajouterMenu">
    </form>

    <hr>

    <h2 class="h2_ajouter_menu">Ajouter Fournisseurs</h2>
    <form class="form_admin" method="POST" action="">

        <label class="label_admin" for="nom_fournisseurs">Nom du fournisseur :</label>
        <input class="input_admin" type="text" name="nom_fournisseurs" >
        <?php if (isset($error["nom_fournisseurs"])) { ?>
            <p><?= htmlspecialchars($error["nom_fournisseurs"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="adresse_fournisseurs">adresse du fournisseur :</label>
        <input class="input_admin" type="text" name="adresse_fournisseurs" >
        <?php if (isset($error["adresse_fournisseurs"])) { ?>
            <p><?= htmlspecialchars($error["adresse_fournisseurs"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="telephone_fournisseurs">Telephone du fournisseur :</label>
        <input class="input_admin" name="telephone_fournisseurs" ></input>
        <?php if (isset($error["telephone_fournisseurs"])) { ?>
            <p><?= htmlspecialchars($error["telephone_fournisseurs"]) ?></p>
        <?php } ?>
        <br>

        <input class="input_admin_submit" type="submit" name="ajouterFournisseurs">
    </form>

    <hr>

    <h2 class="h2_ajouter_menu">Ajouter Produits</h2>
    <form class="form_admin" method="POST" action="">

        <label class="label_admin" for="nom_produits">Nom du produit :</label>
        <input class="input_admin" type="text" name="nom_produits" >
        <?php if (isset($error["nom_produits"])) { ?>
            <p><?= htmlspecialchars($error["nom_produits"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="prix_produits">Prix du produit :</label>
        <input class="input_admin" type="text" name="prix_produits" >
        <?php if (isset($error["prix_produits"])) { ?>
            <p><?= htmlspecialchars($error["prix_produits"]) ?></p>
        <?php } ?>
        <br>
        <input class="input_admin_submit" type="submit" name="ajouterproduits">
    </form>

    <hr>
    <h2 class="h2_ajouter_menu">Ajouter Livraison</h2>
    <form class="form_admin" method="POST" action="">

        <label class="label_admin" for="code_produits">code produits :</label>
        <input class="input_admin" type="text" name="code_produits" >
        <?php if (isset($error["code_produits"])) { ?>
            <p><?= htmlspecialchars($error["code_produits"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="code_fournisseurs">code fournisseurs :</label>
        <input class="input_admin" type="text" name="code_fournisseurs" >
        <?php if (isset($error["code_fournisseurs"])) { ?>
            <p><?= htmlspecialchars($error["code_fournisseurs"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="date_livraison">Date de livraison :</label>
        <input class="input_admin" type="date" name="date_livraison" >
        <?php if (isset($error["date_livraison"])) { ?>
            <p><?= htmlspecialchars($error["date_livraison"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="quantite_livraison">Quantite de livrer :</label>
        <input class="input_admin" type="text" name="quantite_livraison" >
        <?php if (isset($error["quantite_livraison"])) { ?>
            <p><?= htmlspecialchars($error["quantite_livraison"]) ?></p>
        <?php } ?>
        <br>
        <input class="input_admin_submit" type="submit" name="ajouterlivraison">
    </form>
    <hr>

    
    <h2 class="h2_ajouter_menu">Ajouter Facture</h2>
    <form class="form_admin" method="POST" action="">

        

        <label class="label_admin" for="montant_factures">montant factures :</label>
        <input class="input_admin" type="text" name="montant_factures" >
        <?php if (isset($error["montant_factures"])) { ?>
            <p><?= htmlspecialchars($error["montant_factures"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="date_factures">Date de factures :</label>
        <input class="input_admin" type="date" name="date_factures" >
        <?php if (isset($error["date_factures"])) { ?>
            <p><?= htmlspecialchars($error["date_factures"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="code_clients">code client :</label>
        <input class="input_admin" type="text" name="code_clients" >
        <?php if (isset($error["code_clients"])) { ?>
            <p><?= htmlspecialchars($error["code_clients"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="code_fournisseurs">code fournisseur :</label>
        <input class="input_admin" type="text" name="code_fournisseurs" >
        <?php if (isset($error["code_fournisseurs"])) { ?>
            <p><?= htmlspecialchars($error["code_fournisseurs"]) ?></p>
        <?php } ?>
        <br>

        <label class="label_admin" for="code_moyendepaiement">code moyen de paiement :</label>
        <input class="input_admin" type="text" name="code_moyendepaiement" >
        <?php if (isset($error["code_moyendepaiement"])) { ?>
            <p><?= htmlspecialchars($error["code_moyendepaiement"]) ?></p>
        <?php } ?>
        <br>

        <input class="input_admin_submit" type="submit" name="ajouterfacture">
    </form>
    <hr>



    
    <form id="deco" action="" method="post">
        <p><strong>Souhaitez-vous vous déconnecter?</strong>
            <input type="submit" name="deconnexion" value="Déconnexion" />
        </p>
    </form>

<?php
} else {
    header("Location:index.php?Acceuil");
}
?>