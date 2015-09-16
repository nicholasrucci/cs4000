<?php require_once("../includes/header.php") ?>

<h2>Add a Game to the Database</h2>

<form method="post" action="create.php">
    <p>
        <label for="title">Game Title</label><br>
        <input type="text" id="title" name="title">
    </p>
    <p>
        <label for="genre">Genre</label><br>
        <input type="text" id="genre" name="genre">
    </p>
    <p>
        <label for="creator">Creator</label><br>
        <input type="type" id="creator" name="creator">
    </p>
    <p>
        <input type="submit" name="submit" value="Add Game">
    </p>
</form>

<?php require_once("../includes/footer.php") ?>
