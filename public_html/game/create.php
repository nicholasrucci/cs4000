<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

<?php

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $creator = mysqli_real_escape_string($conn, $_POST['creator']);

    $errors = [];

    if (empty($title)) {
        $errors['title'] = "Enter a value for the game title";
    }
    if (!ctype_upper($creator)) {
        $errors['creator'] = "Please type Creator in ALL UPPERCASE CHARACTERS";
    }
    if (!ctype_upper($genre)) {
        $errors['genre'] = "Please type Genre in ALL UPPERCASE CHARACTERS";
    }

    $form_valid = empty($errors);

    if ($form_valid) {
        $sql = "INSERT INTO games (title, genre, creator) VALUES ('$title', '$genre', '$creator')";
        mysqli_query($conn, $sql);
    }

    if ($error = mysqli_error($conn)) {
        $errors['mysql'] = $error;
    }

    $form_valid = empty($errors);

?>

<?php if ($form_valid): ?>

    <h2>Your game was added to the database!</h2>
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

<?php else: ?>

        <?php require_once('new.php') ?>

<?php endif ?>

<?php else: ?>

<?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
