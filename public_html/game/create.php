<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

<?php

$title = $_POST['title'];
$genre = $_POST['genre'];
$creator = $_POST['creator'];

$sql = "INSERT INTO games (title, genre, creator) VALUES ('$title', '$genre', '$creator')";
mysqli_query($conn, $sql);

?>

<?php if ($error = mysqli_error($mysql_connection)): ?>

There was a problem: <?= $error ?>

<?php else: ?>

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

<?php endif ?>

<?php else: ?>

<?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
