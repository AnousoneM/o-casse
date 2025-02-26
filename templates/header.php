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