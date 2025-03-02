<?php include 'templates/header.php' ?>

<?php

// on récupère le json via file_get_contents pour les informations d'utilisateur
$utilisateurJson = file_get_contents('src/Controller/utilisateurs.json');
// on le transforme en array via json_decode : nous ciblons directement le tableau avec "[2]['data'][0]"
$utilisateur = json_decode($utilisateurJson, true)[2]['data'][0];


// on récupère le json via file_get_contents pour les informations d'utilisateur
$commandeJson = file_get_contents('src/Controller/user_commandes.json');
// on le transforme en array via json_decode : nous ciblons directement le tableau avec "[2]['data'][0]"
$commandes = json_decode($commandeJson, true)[2]['data'];

?>

<div class="container bg-light rounded pt-5 pb-3 my-5">
    <h1 class="text-center">Mon profil</h1>
    <div class="row p-5 rounded">
        <div class="col border shadow shadow-sm p-3 mx-2">
            <h2>Mes infos</h2>
            <p class="fs-3"><?= $utilisateur['u_nom'] ?></p>
            <img class="mb-4 portrait-img" src="assets/img/portrait.jfif" alt="Portrait de l'utilisateur">
            <p><b>Mail : </b><?= $utilisateur['u_mail'] ?></p>
            <p><b>Numéro de contact : </b><?= $utilisateur['u_tel'] ?></p>
            <p><b>Adresse : </b><?= $utilisateur['u_adresse'] ?></p>
        </div>
        <div class="col border shadow-sm p-3 mx-2">
            <h2>Mes commandes</h2>
            <table class="table table-sm text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Numéro de la commande</th>
                        <th scope="col">Date de la commande</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <!-- boucle pour faire apparaitre les commandes de l'utilisateur -->
                    <?php
                    $count = 1;
                    foreach ($commandes as $value) { ?>
                        <tr>
                            <th scope="row"><?= $count++ ?></th>
                            <td><?= $value['com_id'] ?></td>
                            <td><?= date_format(date_create($value['com_date']), 'd/m/Y') ?></td>
                            <td><a class="text-dark" href="commandes.php"><i class="bi bi-file-earmark-text-fill"></i></a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-secondary text-center col-4 d-block mx-auto m-2" href="index.php">Retour</a>
</div>

<?php include 'templates/footer.php' ?>