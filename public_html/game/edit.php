<? require_once('../includes/header.php'); ?>

<?php

$id = $_GET['id'];
$sql = "SELECT * FROM games WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

?>

<h2>Edit Game</h2>

<?php if($error = mysqli_error($conn)): ?>
    There was a problem: <?= $error ?>

<?php else: ?>
    <?php if ($row = mysqli_fetch_array($result)): ?>
        <form class="form-horizontal" method="post" action="game/update.php">
            <p>
                <label for="title">Game Title</label><br>
                <input type="text" id="title" name="title" value="<?= $row['title'] ?>">
            </p>
            <p>
                <label for="genre">Genre</label><br>
                <input type="text" id="genre" name="genre" value="<?= $row['genre'] ?>">
            </p>
            <p>
                <label for="creator">Creator</label><br>
                <input type="text" id="creator" name="creator" value="<?= $row['creator'] ?>">
            </p>
            <p>
                <a href="game/index.php"><button class="btn btn-danger">Cancel</button></a>
                <input class="btn btn-primary" type="submit" name="submit" value="Add Game">
            </p>
        </form>
    <?php else: ?>
        <p>
            Sorry, no game with that ID exist
        </p>
        <p>
            <a href="game/index.php"><button class="btn btn-primary">Back to Games</button></a>
        </p>
    <?php endif ?>

<?php endif ?>

<? require_once('../includes/footer.php') ?>
