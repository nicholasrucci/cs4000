<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

    <?php

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //find user in database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_array($result)) {
      if (password_verify($password, $row['encrypted_password'])) {
        $success = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email']   = $row['email'];
      } else {
        $success = false;
      }
    } else {
      $success = false;
    }

    ?>

    <?php if ($error = mysqli_error($conn)): ?>

        There was a problem: <?= $error ?>

    <?php else: ?>

      <?php if ($success): ?>
            <?php header('Location: ../index.php'); ?>
      <?php else: ?>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
            </div>
            <?php require_once('new.php') ?>
      <?php endif ?>

    <?php endif ?>

<?php else: ?>

    <?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
