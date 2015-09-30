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
      <h2>You are signed in!</h2> 
      <?php else: ?>
      <h2>Invalid email and/or password</h2>
      <?php endif ?>

    <?php endif ?>

<?php else: ?>

    <?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
