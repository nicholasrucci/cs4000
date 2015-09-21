<?php require_once("../includes/header.php"); ?>

<?php

    $sql = "SELECT * FROM games";
    $result    = mysqli_query($conn, $sql);

?>

<?php if ($error = mysqli_error($conn)): ?>

    There was a problem: <?= $error ?>

<?php else: ?>

<table class='table table-striped table-hover'>
    <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Creator</th>
        <th></th>
        <th></th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td><?= $row['title'] ?></td>
        <td><?= $row['genre'] ?></td>
        <td><?= $row['creator'] ?></td>
        <td>
            <a href="game/show.php?id=<?= $row['ID'] ?>">Details</a>
        </td>
        <td>
            <a href="game/edit.php?id=<?= $row['ID'] ?>">Edit</a>
        </td>
        <td>
          <form method="post" action="game/destroy.php">
            <input type="hidden" name="id" value="<?= $row["ID"] ?>">
            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
          </form>
        </td>
    </tr>
    <?php endwhile ?>
</table>

<?php endif ?>

<?php require_once("../includes/footer.php"); ?>
