<?php require_once("../includes/header.php") ?>
<?php if(isset($_SESSION['user_id'])): ?>

<h2>Add a Game to the Database</h2>

<?php if (isset($errors)): ?>
    <p>The following errors occurred:</p>
    <ul>
        <?php foreach ($errors as $field => $error): ?>
        <li><?= $error ?></li>
            <?php endforeach ?>
    </ul>
<?php endif ?>

<form class="form-horizontal" method="post" action="game/create.php" enctype="multipart/form-data">
    <p>
        <label for="title">Game Title</label><br>
        <input type="text" id="title" name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>">
    </p>
    <p>
        <label for="genre">Genre</label><br>
        <input type="text" id="genre" name="genre" value="<?php echo isset($_POST['genre']) ? $_POST['genre'] : '' ?>">
    </p>
    <p>
        <label for="creator">Creator</label><br>
        <input type="text" id="creator" name="creator" value="<?php echo isset($_POST['creator']) ? $_POST['creator'] : '' ?>">
    </p>
    <p>
        <input class="btn btn-primary" type="submit" name="submit" value="Add Game">
    </p>
</form>

<?php else: ?>

    <div class="alert alert-warning">
        <h4>Warning!</h4>
        <p>You need to login to create a game.</p><br>
    </div>
    <a class="btn btn-primary" href="sessions/new.php">Login</a>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
