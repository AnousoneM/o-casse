<?php

// on récupère le json via file_get_contents
$prodJson = file_get_contents('src/Controller/produits.json');

// on le transforme en array via json_decode : nous ciblons directement le tableau avec "[2]['data']"
$produits = json_decode($prodJson, true)[2]['data'];
// on mélange les produits
shuffle($produits);

// création d'un tableau associatif pour la mise en place des catégories
$pills = [
    'Mécanique' => 'primary',
    'Carrosserie' => 'secondary',
    'Intérieur' => 'success',
    'Eclairage' => 'info',
    'Pneumatique' => 'dark',
];

?>

<?php include 'templates/header.php' ?>



<!-- block logo + societe -->
<div class="px-4 py-5 mt-5 text-center bg-white splash">
    <img src="assets/img/ocasse-logo.svg" alt="logo o-casse">
    <h1 class="display-4 fw-bold logo-text">O-casse</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">O-casse, spécialiste des pièces auto d’occasion, propose aux particuliers des pièces détachées en très bon état, garanties et à prix imbattables. Économiques et écologiques, nos pièces vous permettent de prolonger la vie de votre voiture sans vous ruiner. Roulez malin, réparez au lieu de jeter </p>
    </div>
</div>

<div class="inter-div-1"></div>

<div class="px-4 pb-1 mt-2 mb-2 text-center">
    <div class="display-4 mt-3">
        <i class="bi bi-car-front-fill mx-2"></i><i class="bi bi-tools mx-2"></i>
    </div>
    <h1 class="display-6 fw-bold text-body-emphasis">Donnez une seconde vie à votre voiture !</h1>
</div>

<div class="row row-cols-lg-4 g-4 mx-5 mb-5">

    <!-- Boucle permettant d'afficher tous les produits -->
    <?php foreach ($produits as $value) { ?>

        <div class="col">
            <a href="<?= $value["prod_id"] == 11 ? 'produit.php' : '#' ?>" class="text-decoration-none text-dark">
                <div class="p-4 bg-light shadow border-light">
                    <span class="badge p-2 text-bg-<?= $pills[$value["cat_nom"]] ?>"><?= $value["cat_nom"] ?></span>

                    <div class="my-3 p-2 text-center">
                        <img src="assets/img/produits/<?= $value["prod_img"] ?>" class="img-produit" alt="image de <?= $value["prod_nom"] ?>">
                    </div>

                    <p class="text-start"><?= $value["prod_nom"] ?></p>
                    <b><?= $value["prod_prix"] ?>€</b>
                </div>
            </a>
        </div>

    <?php } ?>

</div>

<div class="inter-div-2"></div>

<?php include 'templates/footer.php' ?>