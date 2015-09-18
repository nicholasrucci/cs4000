<? require_once('../includes/header.php'); ?>

<?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM games WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

?>

    <h2>Game Details</h2>

<?php if ($error = mysqli_error($conn)): ?>
    There was a problem: <?= $error ?>
<?php else: ?>
    <?php if ($row = mysqli_fetch_array($result)): ?>
        <p>
            <strong>Title</strong>
            <?= $row['title'] ?>
        </p>
        <p>
            <strong>Genre</strong>
            <?= $row['genre'] ?>
        </p>
        <p>
            <strong>Creator</strong>
            <?= $row['creator'] ?>
        </p>
        <p>
            <a href="game/index.php"><button class="btn btn-primary">Back to Games</button></a>
        </p>
    <?php else: ?>
        <p>Sorry, no game exist with that ID</p>
    <?php endif ?>
<?php endif ?>



<? require_once('../includes/footer.php') ?>