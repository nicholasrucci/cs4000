<?php require_once("../includes/header.php") ?>

<h2>Sign up!</h2>

<?php if (isset($errors)): ?>
<p>The following errors occured:</p>
<ul>
  <?php foreach ($errors as $field => $error): ?>
  <li><?= $error ?><li>
  <?php endforeach ?>
</ul>
<?php endif ?>

<form class="form-horizontal" method="post" action="users/create.php">
    <p>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" value="<?= printStr($name) ?>">
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="<?= printStr($email) ?>">
    </p>
    <p>
        <label for="password">password</label><br>
        <input type="text" id="password" name="password">
    </p>
    <p>
        <input class="btn btn-primary" type="submit" name="submit" value="Create User">
    </p>
</form>

<?php require_once("../includes/footer.php") ?>
