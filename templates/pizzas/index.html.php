<?php
foreach ($pizzas as $pizza): ?>

    <div class="container form-control">
        <h4>Nom : <?= $pizza->getName(); ?> </h4>
        <h4>Taille : <?= $pizza->getSize(); ?>  </h4>
        <a href="?type=pizza&action=delete&id=<?= $pizza->getId() ?>" class="btn btn-danger">Supprimer</a>
        <a href="?type=pizza&action=show&id=<?= $pizza->getId() ?>" class="btn btn-primary">Voir</a>
        <a href="?type=pizza&action=update&id=<?= $pizza->getId() ?>" class="btn btn-warning">Modifier</a>
    </div>


<?php endforeach; ?>

<a href="?type=pizza&action=insert" class="btn btn-success">Nouvelle pizza ?</a>