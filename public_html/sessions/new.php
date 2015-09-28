<?php require_once("../includes/header.php") ?>

<h2>Login</h2>

<form class="form-horizontal" method="post" action="sessions/create.php">
    <p>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email">
    </p>
    <p>
        <label for="password">password</label><br>
        <input type="password" id="password" name="password">
    </p>
    <p>
        <input class="btn btn-primary" type="submit" name="submit" value="Login">
    </p>
</form>

<?php require_once("../includes/footer.php") ?>
