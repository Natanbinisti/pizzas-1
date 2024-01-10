<div class="container form-control">
    <h4>Nom : <?= $pizza->getName(); ?> </h4>
    <h4>Taille : <?= $pizza->getSize(); ?> </h4>
    <a href="?type=pizza&action=delete&id=<?= $pizza->getId() ?>" class="btn btn-danger">Supprimer</a>
    <a href="?type=pizza&action=edit&id=<?= $pizza->getId() ?>" class="btn btn-warning">Modifier</a>
</div>