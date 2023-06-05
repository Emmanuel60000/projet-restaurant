

    <h1 class="h1_annuler_reservation">Vos réservations</h1>
    <p class="p_annuler_une_reservation"> <strong> Si vous souhaitez annuler une reservation cliquez sur le bouton supprimer </strong></p>
    <?php
    if (isset($_SESSION['donnees']) && !empty($_SESSION['donnees'])) {
        
    ?>

        <table>
            <tr>
                <th>
                    Date de creation de reservation
                </th>
                <th>
                    Nom du client
                </th>
                <th>
                    Prenom du client
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
                        <?php echo $valeur["nom_clients"] ?>
                    </td>
                    <td>
                        <?php echo $valeur["prenom_clients"] ?>
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
                        <form action="" method="post">
                            <button class="button_tableau_reservation" type="submit" value="<?= $valeur["date_creat_reservation"]  ?>" name="delete">supprimer</button>
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

