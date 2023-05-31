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
    <form class="form_admin" method="POST" action="">

        <label class="label_admin" for="type_menu">Type du menu :</label>
        <input class="input_admin" type="text" name="type_menu" id="type_menu" required>
        <br>

        <label class="label_admin" for="nom_menu">Nom du menu :</label>
        <input class="input_admin" type="text" name="nom_menu" id="nom_menu" required>
        <br>

        <label class="label_admin" for="description_menu">Description :</label>
        <textarea class="input_admin" name="description_menu" id="description_menu" required></textarea>
        <br>

        <label class="label_admin" for="prix_menu">Prix :</label>
        <input class="input_admin" type="text" name="prix_menu" id="prix_menu" required>
        <br>

        <input class="input_admin_submit" type="submit" name="ajouterMenu">
    </form>

    <hr>

    <h2 class="h2_ajouter_menu">Ajouter Fournisseurs</h2>
    <form class="form_admin" method="POST" action="">

        <label class="label_admin" for="nom_fournisseurs">Nom du fournisseur :</label>
        <input class="input_admin" type="text" name="nom_fournisseurs" required>
        <br>

        <label class="label_admin" for="adresse_fournisseurs">adresse du fournisseur :</label>
        <input class="input_admin" type="text" name="adresse_fournisseurs" required>
        <br>

        <label class="label_admin" for="telephone_fournisseurs">Telephone du fournisseur :</label>
        <input class="input_admin" name="telephone_fournisseurs" required></input>
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