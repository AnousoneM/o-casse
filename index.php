<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'casse</title>
    <!-- logo  -->
    <link rel="icon" type="image/svg" href="assets/img/ocasse-logo.svg" />
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="background d-flex flex-column vh-100">
    <header class="mb-1">
        <nav class="navbar navbar-expand-lg bg-light shadow fw-bold fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand logo-text" href="index.php">
                    <img class="logo-img ms-2" src="assets/img/ocasse-logo.svg" alt="image logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catégories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Mécanique</a></li>
                                <li><a class="dropdown-item" href="#">Carosserie</a></li>
                                <li><a class="dropdown-item" href="#">Intérieur</a></li>
                                <li><a class="dropdown-item" href="#">Eclairage</a></li>
                                <li><a class="dropdown-item" href="#">Pneumatique</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Phare, pare-choc ..." aria-label="Search">
                        <button class="btn btn-dark" type="submit" disabled>Rechercher</button>
                    </form>
                    <button class="mx-3 btn btn-outline-dark"><i class="bi bi-person-fill me-2"></i>Mat</button>
                </div>
            </div>
        </nav>
    </header>

    <div class="px-4 pt-5 pb-3 my-5 text-center bg-white">
        <img src="assets/img/ocasse-logo.svg" alt="logo o-casse">
        <h1 class="display-4 fw-bold logo-text">O-casse</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">O-casse, spécialiste des pièces auto d’occasion, propose aux particuliers des pièces détachées en très bon état, garanties et à prix imbattables. Économiques et écologiques, nos pièces vous permettent de prolonger la vie de votre voiture sans vous ruiner. Roulez malin, réparez au lieu de jeter </p>
        </div>
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






    <footer class="text-center pt-4 pb-1 mt-auto shadow bg-light">
        <a href="#" class="text-decoration-none text-dark">Mentions légales</a>
        <p class="pt-3 copyrights-text">--- Stan Anou - 2025 --- </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>