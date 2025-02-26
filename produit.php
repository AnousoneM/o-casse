<?php include 'templates/header.php' ?>

<?php

/**
 * Fonction permettant d'intégrer des étoiles en fonction de la moyenne
 */
function createStars($moyenne): void
{
    for ($i = 1; $i <= ceil($moyenne); $i++) {
        echo '<i class="bi bi-star-fill text-warning mx-1"></i>';
    }
    for ($i = 1; $i <= 5 - ceil($moyenne); $i++) {
        echo '<i class="bi bi-star text-dark mx-1"></i>';
    }
}


// on récupère le json via file_get_contents pour le détail d'un produit
$prodJson = file_get_contents('src/Controller/details_produit.json');
// on le transforme en array via json_decode : nous ciblons directement le tableau avec "[2]['data'][0]"
$detailsProd = json_decode($prodJson, true)[2]['data'][0];

// on récupère le json via file_get_contents pour la moyenne des notes
$moyenneJson = file_get_contents('src/Controller/moyenne_notes.json');
// on le transforme en array via json_decode : nous ciblons directement le tableau avec "[2]['data'][0]"
$moyenneNotes = json_decode($moyenneJson, true)[2]['data'][0];

// on récupère le json via file_get_contents pour tous les avis
$avisJson = file_get_contents('src/Controller/avis_un_produits.json');
// on le transforme en array via json_decode : nous ciblons directement le tableau avec "[2]['data']"
$avis = json_decode($avisJson, true)[2]['data'];

?>

<div class="container bg-light rounded pt-5 pb-3 my-5">
    <div class="row p-5 rounded">
        <div class="col"><img src="assets/img/produits/siege_cuir.jpg" alt=""></div>
        <div class="col p-3">
            <p class="mb-1">Réf : <?= $detailsProd["prod_ref"] ?></p>
            <p>Stock : <b><?= $detailsProd["prod_qte"] ?></b></p>
            <span class="badge mb-2 rounded-pill text-bg-success"><?= $detailsProd["cat_nom"] ?></span>
            <p class="fs-3 fw-bold"><?= $detailsProd["prod_prix"] ?>€</p>
            <h1><?= $detailsProd["prod_nom"] ?></h1>
            <p>Avis <?php createStars($moyenneNotes["note_moyenne"]) ?> : (<a class="mx-1" data-bs-toggle="modal" data-bs-target="#avisModal" href="#"><?= count($avis) ?></a>) </p>
            <p><?= $detailsProd["prod_desc"] ?></p>
            <button type="button" class="btn btn-dark">Réserver</button>
        </div>
    </div>
    <a class="btn btn-secondary text-center col-4 d-block mx-auto m-2" href="index.php">Retour</a>
</div>

<!-- Modal des avis-->
<div class="modal fade" id="avisModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Les avis du produit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <?php foreach ($avis as $value) { ?>

                    <div class="row mb-2 py-2 border-bottom">
                        <div class="col">
                            <p><?= $value["u_nom"] ?></p>
                            <p><?= date_format(date_create($value["avis_date"]), 'd/m/Y') ?></p>
                            <?php createStars($value["avis_note"]) ?>
                        </div>
                        <div class="col border-start">
                            <i>"<?= $value["avis_texte"] ?>"</i>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php' ?>