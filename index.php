<?php include 'templates/header.php' ?>

<div class="px-4 pt-5 pb-3 my-5 text-center bg-white">
    <img src="assets/img/ocasse-logo.svg" alt="logo o-casse">
    <h1 class="display-4 fw-bold logo-text">O-casse</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">O-casse, spécialiste des pièces auto d’occasion, propose aux particuliers des pièces détachées en très bon état, garanties et à prix imbattables. Économiques et écologiques, nos pièces vous permettent de prolonger la vie de votre voiture sans vous ruiner. Roulez malin, réparez au lieu de jeter </p>
    </div>

    <?php
    // on recupère toutes les catégories au format json puis on les transforme en array via json_decode
    $catJson = file_get_contents('src/Controller/toutes_categories.json');
    $categories = json_decode($catJson, true)[2]['data'];

    var_dump($categories);
    ?>

</div>

<div class="px-4 pb-1 my-5 text-center">
    <div class="display-4 mt-3">
        <i class="bi bi-car-front-fill mx-2"></i><i class="bi bi-tools mx-2"></i>
    </div>
    <h1 class="display-6 fw-bold text-body-emphasis">Donnez une seconde vie à votre voiture !</h1>
</div>

<div class="row row-cols-lg-4 g-3 mx-5 mb-5">

    <div class="col">
        <a href="#" class="text-decoration-none text-dark">
            <div class="p-3 item-background shadow border-light">
                <span class="badge rounded-pill text-bg-primary">Pneumatique</span>
                <img src="https://s1.medias-norauto.fr/images_produits/tyre_comm_txt-michelin_primacy_4_plus-1/400x400/pneu-michelin-primacy-4-205-55-r16-91-v--2433281.jpg" class="d-block mx-auto img-fluid border rounded my-3" alt="img-carotte">
                <p class="text-start">Pneu pas cher</p>
                <b>18€</b>
            </div>
        </a>
    </div>

    <div class="col">
        <div class="p-3 item-background shadow border-light">
            <span class="badge rounded-pill text-bg-primary">Pneumatique</span>
            <img src="https://s1.medias-norauto.fr/images_produits/tyre_comm_txt-michelin_primacy_4_plus-1/400x400/pneu-michelin-primacy-4-205-55-r16-91-v--2433281.jpg" class="d-block mx-auto img-fluid border my-3" alt="img-carotte">
            <p class="text-start">Pneu pas cher</p>
            <b>18€</b>
        </div>
    </div>

    <div class="col">
        <div class="p-3 item-background shadow border-light">
            <span class="badge rounded-pill text-bg-primary">Pneumatique</span>
            <img src="https://s1.medias-norauto.fr/images_produits/tyre_comm_txt-michelin_primacy_4_plus-1/400x400/pneu-michelin-primacy-4-205-55-r16-91-v--2433281.jpg" class="d-block mx-auto img-fluid border my-3" alt="img-carotte">
            <p class="text-start">Pneu pas cher</p>
            <b>18€</b>
        </div>
    </div>

    <div class="col">
        <div class="p-3 item-background shadow border-light">
            <span class="badge rounded-pill text-bg-primary">Pneumatique</span>
            <img src="https://s1.medias-norauto.fr/images_produits/tyre_comm_txt-michelin_primacy_4_plus-1/400x400/pneu-michelin-primacy-4-205-55-r16-91-v--2433281.jpg" class="d-block mx-auto img-fluid border my-3" alt="img-carotte">
            <p class="text-start">Pneu pas cher</p>
            <b>18€</b>
        </div>
    </div>

    <div class="col">
        <div class="p-3 item-background shadow border-light">
            <span class="badge rounded-pill text-bg-primary">Pneumatique</span>
            <img src="https://s1.medias-norauto.fr/images_produits/tyre_comm_txt-michelin_primacy_4_plus-1/400x400/pneu-michelin-primacy-4-205-55-r16-91-v--2433281.jpg" class="d-block mx-auto img-fluid border my-3" alt="img-carotte">
            <p class="text-start">Pneu pas cher</p>
            <b>18€</b>
        </div>
    </div>

</div>

<?php include 'templates/footer.php' ?>