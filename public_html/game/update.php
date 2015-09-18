<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

    <?php
    $id = $_GET['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $creator = mysqli_real_escape_string($conn, $_POST['creator']);

    $sql = "UPDATE games SET title='$title', genre='$genre', creator='$creator' WHERE id='$id'";
    mysqli_query($conn, $sql);

    ?>

    <?php if ($error = mysqli_error($conn)): ?>

        There was a problem: <?= $error ?>

    <?php else: ?>

        <h2>Your game was edited</h2>

        <p>
            <strong>Game Title:</strong>
            <?= $title ?>
        </p>
        <p>
            <strong>Genre:</strong>
            <?= $genre ?>
        </p>
        <p>
            <strong>Creator:</strong>
            <?= $creator ?>
        </p>

        <p>
            <a href="game/index.php"><button class="btn btn-primary">Back to Games</button></a>
        </p>

    <?php endif ?>

<?php else: ?>

    <?php header('Location: edit.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
