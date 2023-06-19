<h1 class="h1_annuler_reservation">Vos réservations</h1>
<p class="p_annuler_une_reservation"> <strong> Si vous souhaitez annuler une réservation, cliquez sur le bouton supprimer </strong></p>
<?php
if (isset($_SESSION['donnees']) && !empty($_SESSION['donnees'])) {

?>

    <table>
        <tr>
            <th>
                Date de création de réservation
            </th>
            <th>
                Nom du client
            </th>
            <th>
                Prénom du client
            </th>
            <th>
                Date de réservation
            </th>
            <th>
                Nombre de personnes
            </th>
            <th>
                Heure de réservation
            </th>
            <th>
                Supprimer la réservation
            </th>
        </tr>
        <?php

        foreach ($annuler as $cle => $valeur) { ?>
            <tr>
                <td>
                    <?= htmlspecialchars($valeur["date_creat_reservation"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($valeur["nom_clients"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($valeur["prenom_clients"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($valeur["date_reservation"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($valeur["nombredepersonne_reservation"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($valeur["heure_reservation"]) ?>
                </td>
                <td>
                    <form action="" method="post">
                        <button class="button_tableau_reservation" type="submit" value="<?= htmlspecialchars($valeur["date_creat_reservation"]) ?>" name="delete">supprimer</button>
                    </form>
                </td>
            </tr>
        <?php  } ?>
    </table>
<?php
} else {
    session_destroy();
    header("Location:index.php?Acceuil");
} ?>
<form id="deco" action="" method="post">
    <p><strong>Souhaitez-vous vous déconnecter?</strong>
        <input type="submit" name="deconnexion" value="Déconnexion" />
    </p>
</form>

