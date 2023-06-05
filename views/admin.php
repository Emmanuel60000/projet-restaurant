<?php


if ($_SESSION['donnees'][0]["code_roles"] === 1) {

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
            <input class="input_admin" type="text" name="type_menu" id="type_menu" required>
            <?php if (isset($error["type_menu"])) { ?>
                <p><?= $error["type_menu"] ?></p>
            <?php } ?>
            <br>

            <label class="label_admin" for="nom_menu">Nom du menu :</label>
            <input class="input_admin" type="text" name="nom_menu" id="nom_menu" required>
            <?php if (isset($error["nom_menu"])) { ?>
                <p><?= $error["nom_menu"] ?></p>
            <?php } ?>
            <br>

            <label class="label_admin" for="description_menu">Description :</label>
            <textarea class="input_admin" name="description_menu" id="description_menu" required></textarea>
            <?php if (isset($error["description_menu"])) { ?>
                <p><?= $error["description_menu"] ?></p>
            <?php } ?>
            <br>

            <label class="label_admin" for="prix_menu">Prix :</label>
            <input class="input_admin" type="text" name="prix_menu" id="prix_menu" required>
            <?php if (isset($error["prix_menu"])) { ?>
                <p><?= $error["prix_menu"] ?></p>
            <?php } ?>
            <br>

            <label for="image">Image </label>
            <input type="file" name="image" id="image" />
            <br>
            <?php if (isset($error["image"])) { ?>
                <p><?= $error["image"] ?></p>
            <?php } ?>
            <br>
            <input class="input_admin_submit" type="submit" name="ajouterMenu">
        </form>

        <hr>

        <h2 class="h2_ajouter_menu">Ajouter Fournisseurs</h2>
        <form class="form_admin" method="POST" action="">

            <label class="label_admin" for="nom_fournisseurs">Nom du fournisseur :</label>
            <input class="input_admin" type="text" name="nom_fournisseurs" required>
            <?php if (isset($error["nom_fournisseurs"])) { ?>
                <p><?= $error["nom_fournisseurs"] ?></p>
            <?php } ?>
            <br>

            <label class="label_admin" for="adresse_fournisseurs">adresse du fournisseur :</label>
            <input class="input_admin" type="text" name="adresse_fournisseurs" required>
            <?php if (isset($error["adresse_fournisseurs"])) { ?>
                <p><?= $error["adresse_fournisseurs"] ?></p>
            <?php } ?>
            <br>

            <label class="label_admin" for="telephone_fournisseurs">Telephone du fournisseur :</label>
            <input class="input_admin" name="telephone_fournisseurs" required></input>
            <?php if (isset($error["telephone_fournisseurs"])) { ?>
                <p><?= $error["telephone_fournisseurs"] ?></p>
            <?php } ?>
            <br>

            <input class="input_admin_submit" type="submit" name="ajouterFournisseurs">
        </form>

        <hr>

        <h2 class="h2_ajouter_menu">Ajouter Livraison</h2>
        <form class="form_admin" method="POST" action="">

            <label class="label_admin" for="nom_produits">Nom du produit :</label>
            <input class="input_admin" type="text" name="nom_produits" required>
            <br>

            <label class="label_admin" for="date_livraison">Date de livraison :</label>
            <input class="input_admin" type="text" name="date_livraison" required>
            <br>

            <label class="label_admin" for="quantite_livraison">Quantite de livrer :</label>
            <input class="input_admin" type="text" name="quantite_livraison" required>
            <br>

            <label class="label_admin" for="prix_produits">Prix du produit :</label>
            <input class="input_admin" type="text" name="prix_produits" required>
            <br>
            <input class="input_admin_submit" type="submit" name="ajouterLivraison">
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
} ?>