<?php

// on recupère toutes les catégories au format json puis on les transforme en array via json_decode
$catJson = file_get_contents('src/Controller/toutes_categories.json');
$categories = json_decode($catJson, true)[2]['data'];

// on stock l'url dans une variable uri;
$uri = $_SERVER['REQUEST_URI'];

// fonction pour rechercher un élément dans l'URI qui retourne un boolean true ou false
function testUri($uri)
{
    switch ($uri) {
        case "/index.php":
        case "/":
        case "/o-casse/index.php":
            return true;
            break;
        default:
            return false;
    }
}

?>

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

<body class="background d-flex flex-column <?= testUri($uri)? '' : 'vh-100' ?>">
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
                            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catégories
                            </a>
                            <ul class="dropdown-menu">

                                <?php foreach ($categories as $cat) { ?>
                                    <li><a class="dropdown-item" href="#"><?= $cat['cat_nom'] ?></a></li>
                                <?php } ?>

                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Phare, pare-choc ..." aria-label="Search">
                        <button class="btn btn-dark" type="submit" disabled>Rechercher</button>
                    </form>
                    <a class="mx-lg-3 mx-auto d-lg-inline d-block text-center col-lg-1 col-10 btn btn-outline-dark mt-lg-0 mt-3" href="profil.php"><i class="bi bi-person-fill me-2"></i>Mat</a>
                </div>
            </div>
        </nav>
    </header>