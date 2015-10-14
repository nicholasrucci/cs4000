<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

    <?php

    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];

    $errors = [];

    if (!ctype_upper($v1)) {
        $errors['v1'] = "Please type validation 1 in ALL UPPERCASE CHARACTERS";
    }

    if (empty($v2)) {
        $errors['v1'] = "Please type validation 1 in ALL UPPERCASE CHARACTERS";
    }

    if (!preg_match('/^[\w]+$/', $v3)) {
        $errors['v1'] = "Please include at least one number and one letter";
    }

    $form_valid = empty($errors);

    if ($error = mysqli_error($conn)) {
        $errors['mysql'] = $error;
    }

    $form_valid = empty($errors);

    ?>

    <?php if ($form_valid): ?>

        <h2>Your validation!</h2>
        <p>
            <strong>Validation 1:</strong>
            <?= $v1 ?>
        </p>
        <p>
            <strong>Validation 2:</strong>
            <?= $v2 ?>
        </p>
        <p>
            <strong>Validation 3:</strong>
            <?= $v3 ?>
        </p>

        <p>
            <a href="validate/me.php"><button class="btn btn-primary">Back to Validation Form</button></a>
        </p>

    <?php else: ?>

        <h2>There was a problem</h2>
        <?php require_once('me.php') ?>

    <?php endif ?>

<?php else: ?>

    <?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
