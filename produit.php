<?php include 'templates/header.php' ?>

<?php

function createStars($moyenne){
    for($i = 1 ; $i <= ceil($moyenne) ; $i++){
        echo '<i class="bi bi-star-fill text-warning mx-1"></i>';
    }
    for($i = 1 ; $i <= 5 - ceil($moyenne) ; $i++){
        echo '<i class="bi bi-star text-dark mx-1"></i>';
    }

}

?>

<div class="container bg-light rounded pt-5 my-5">
    <div class="row p-5 border border-danger rounded">
        <div class="col"><img src="assets/img/produits/siege_cuir.jpg" alt=""></div>
        <div class="col border border-primary p-3">
            <p>Réf : 502325</p>
            <p class="fs-3 fw-bold">50€</p>
            <h1>SIEGE CUIR</h1>
            <p>Avis <?php createStars(2) ?> : (<a class="mx-1" data-bs-toggle="modal" data-bs-target="#avisModal" href="#">4</a>) </p>
            <p>qsdqsdqs qsd qsd qsd q qsdqsdqsdqsdqsd qsdqsdqsd qsd qsd </p>
        </div>
    </div>
    <a class="btn btn-secondary text-center col-4 d-block mx-auto m-2" href="index.php">Retour</a>
</div>

<!-- Modal des avis-->
<div class="modal fade" id="avisModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalLabel">Les avis du produit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<?php include 'templates/footer.php' ?>