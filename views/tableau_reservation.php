<?php
if (isset($_SESSION['donnees']) && !empty($_SESSION['donnees'])){
    // $annuler = $_SESSION['donnees'];
?>

<table>
    <tr>
        <th>
            Date de creation de reservation
        </th>
        <th>
            Code client
        </th>
        <th>
            Code menu
        </th>
        <th>
            Date de reservation
        </th>
        <th>
            Nombre de personne
        </th>
        <th>
            Heure de reservation
        </th>
        <th>
            Commentaires
        </th>
        <th>
            Supprimer la reservation
        </th>
    </tr>
    <?php

    foreach ($annuler as $cle => $valeur) { ?>
        <tr>
            <td>
                <?php echo $valeur["date_creat_reservation"] ?>
            </td>
            <td>
                <?php echo $valeur["code_clients"] ?>
            </td>
            <td>
                <?php echo $valeur["code_menu"] ?>
            </td>
            <td>
                <?php echo $valeur["date_reservation"] ?>
            </td>
            <td>
                <?php echo $valeur["nombredepersonne_reservation"] ?>
            </td>
            <td>
                <?php echo $valeur["heure_reservation"] ?>
            </td>
            <td>
                <?php echo $valeur["commentaires"] ?>
            </td>
            <td>
                <form action="" method="post">
                    <button class="button_tableau_reservation" type="submit" value="<?= $valeur["date_creat_reservation"]  ?>" name="delete">supprimer</button>
            </td>
        </tr>
    <?php  } ?>
</table>
<?php 
}else{
    session_destroy();
    header("Location:index.php?Acceuil");
}