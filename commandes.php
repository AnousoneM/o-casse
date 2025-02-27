<?php include 'templates/header.php' ?>

<div class="container bg-light rounded pt-5 pb-3 my-5">
    <h1 class="text-center">Commande #1</h1>

    <table class="table table-sm table-bordered">
        <thead class="text-center">
            <tr class="d-flex">
                <th scope="col" class="col-2">#</th>
                <th scope="col" class="col-4">nom</th>
                <th scope="col" class="col-2">prix unitaire</th>
                <th scope="col" class="col-2">quantité</th>
                <th scope="col" class="col-2">sous-total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="d-flex">
                <th scope="row" class="col-2">1</th>
                <td class="col-4">Mark</td>
                <td class="col-2">Otto</td>
                <td class="col-2">@mdo</td>
                <td class="col-2">@mdo</td>
            </tr>
            <tr class="d-flex">
                <th scope="row" class="col-2">2</th>
                <td class="col-4">Jacob</td>
                <td class="col-2">Thornton</td>
                <td class="col-2">@fat</td>
                <td class="col-2">@fat</td>
            </tr>

        </tbody>
    </table>

    <a class="btn btn-secondary text-center col-4 d-block mx-auto m-2" href="index.php">Retour</a>
</div>

<?php include 'templates/footer.php' ?>