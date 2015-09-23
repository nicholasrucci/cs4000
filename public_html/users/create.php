<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

    <?php

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, encrypted_password) VALUES ('$name', '$email', '$encrypted_password')";
    mysqli_query($conn, $sql);

    ?>

    <?php if ($error = mysqli_error($conn)): ?>

        There was a problem: <?= $error ?>

    <?php else: ?>

        <? header('Location: login.php'); ?>

    <?php endif ?>

<?php else: ?>

    <?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
