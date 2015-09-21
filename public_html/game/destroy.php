<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

<?php

$id = mysqli_real_escape_string($conn, $_POST['ID']);
$sql = "DELETE * FROM games WHERE id='$id'";
mysqli_query($conn, $sql);

?>

<?php if ($error = mysqli_error($conn)): ?>

There was a problem: <?= $error ?>

<?php else: ?>

<?php header('Location: new.php'); ?>

<?php endif ?>

<?php else: ?>

<?php header('Location: index.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
