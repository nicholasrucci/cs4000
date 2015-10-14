<?php require_once("../includes/header.php") ?>

<h2>Add a Game to the Database</h2>

<?php if (isset($errors)): ?>
    <p>The following errors occurred:</p>
    <ul>
        <?php foreach ($errors as $field => $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<form class="form-horizontal" method="post" action="validate/create.php" enctype="multipart/form-data">
    <p>
        <label for="title">Uppercase Letters</label><br>
        <input type="text" id="v1" name="v1" value="<?php echo isset($_POST['v1']) ? $_POST['v1'] : '' ?>">
    </p>
    <p>
        <label for="genre">Is Present</label><br>
        <input type="text" id="v2" name="v2" value="<?php echo isset($_POST['v2']) ? $_POST['v2'] : '' ?>">
    </p>
    <p>
        <label for="creator">Numbers and Letters</label><br>
        <input type="text" id="v3" name="v3" value="<?php echo isset($_POST['v3']) ? $_POST['v3'] : '' ?>">
    </p>
    <p>
        <input class="btn btn-primary" type="submit" name="submit" value="Add Game">
    </p>
</form>

<?php require_once("../includes/footer.php") ?>