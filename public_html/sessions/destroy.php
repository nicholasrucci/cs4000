<?php require_once("../includes/header.php") ?>

<?php if (isset($_SESSION['user_id'])): ?>

    <?php

    unset($_SESSION['user_id']);
    header('Location: index.php');

    ?>

<?php else: ?>

    <?php header('Location: index.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>