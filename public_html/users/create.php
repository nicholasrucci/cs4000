<?php require_once("../includes/header.php") ?>

<?php if (isset($_POST['submit'])): ?>

    <?php

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // TODO: validate form data
    $errors = [];
    if (empty($email)) {
      $errors['email'] = "Please enter an email";
    }
    if (empty($name)) {
      $errors['name'] = "Please enter your name";
    }
    if (empty($password)) {
      $errors['password'] = "Please enter a password";
    }

    $form_valid = empty($errors);

    
    if ($form_valid){
      $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (name, email, encrypted_password) VALUES ('$name', '$email', '$encrypted_password')";
      mysqli_query($conn, $sql);
    }

    if ($error = mysqli_error($conn)) {
      $errors['mysql'] = $error;
    }

    $form_valid = empty($errors);

    ?>

    <?php if ($form_valid): ?>

       <h2>Thanks for signing up</h2> 

    <?php else: ?>

      <h2>There was a problem</h2> 
      <?php require_once('new.php') ?>

    <?php endif ?>

<?php else: ?>

    <?php header('Location: new.php'); ?>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
