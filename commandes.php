<?php include 'templates/header.php' ?>

<?php

// on récupère le json via file_get_contents pour les détails de la commande
$detailsJson = file_get_contents('src/Controller/details_commande.json');
// on le transforme en array via json_decode : nous ciblons directement le tableau avec "[2]['data'][0]"
$details = json_decode($detailsJson, true)[2]['data'];

function calculateSousTotal($qty, $price)
{
    return $qty * $price;
}

?>

<div class="container bg-light rounded pt-5 pb-3 my-5">
    <h1 class="text-center mb-4">Commande #1</h1>

    <table class="table bg-white table-borderless table-sm mb-5">
        <thead class="text-center">
            <tr class="d-flex">
                <th scope="col" class="col-1 text-center">Réf.</th>
                <th scope="col" class="col-2 text-center">Catégorie</th>
                <th scope="col" class="col-4 text-center">Nom</th>
                <th scope="col" class="col-1 text-center">Quantité</th>
                <th scope="col" class="col-2 text-end">Prix unitaire (TTC)</th>
                <th scope="col" class="col-2 text-end">Sous-total (TTC)</th>
            </tr>
        </thead>
        <tbody>
            <!-- boucle des achats -->

            <?php
            $total = 0;
            foreach ($details as $produit) { ?>
                <tr class="d-flex">
                    <td class="col-1 text-center"><?= $produit['prod_ref'] ?></td>
                    <td class="col-2 text-center"><?= $produit['cat_nom'] ?></td>
                    <td class="col-4 text-center"><?= $produit['prod_nom'] ?></td>
                    <td class="col-1 text-center"><?= $produit['qte'] ?></td>
                    <td class="col-2 text-end"><?= $produit['prod_prix'] ?>€</td>
                    <td class="col-2 text-end"><?= $produit['sous-total'] ?>€</td>
                </tr>
            <?php
                $total += $produit['sous-total'];
            } ?>

            <!-- dernière ligne avec le total -->
            <tr class="mt-2 d-flex border-top">
                <td class="col-1 text-center"></td>
                <td class="col-2 text-center"></td>
                <td class="col-4 text-center"></td>
                <td class="col-1 text-center"></td>
                <td class="col-2 text-end fw-bold">TOTAL (TTC)</td>
                <td class="col-2 text-end fw-bold"><?= $total ?>€</td>
            </tr>

        </tbody>
    </table>

    <a class="btn btn-secondary text-center col-4 d-block mx-auto m-2" href="profil.php">Retour</a>
</div>

<?php include 'templates/footer.php' ?>