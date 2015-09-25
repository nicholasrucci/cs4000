<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

    <?php

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
     
    //find user in database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    mysqli_query($conn, $sql);
    
    if ($row = mysqli_query($result)) {
      if (password_verify($password, $row['encrypted_password'])) {
        $_SESSION['user_id'] = $row['ID'];
      } else {
        echo "Username or password does not match";
      }
    } else {
        echo "Username or password does not match";
    }

    ?>

    <?php if ($error = mysqli_error($conn)): ?>

        There was a problem: <?= $error ?>

    <?php else: ?>

        <? header('Location: ../index.php'); ?>

    <?php endif ?>

<?php else: ?>

    <?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
