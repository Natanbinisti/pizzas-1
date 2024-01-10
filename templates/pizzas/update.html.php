<form action="" method="post">

    <input type="text" placeholder="name" name="name" value="<?= $pizza->getName() ?>">
    <input type="text" placeholder="size" name="size" value="<?= $pizza->getSize() ?>">
    <button type="submit" name="id" value="" class="btn btn-success">Modifier</button>
</form>