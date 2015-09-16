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
    </tr>
    <?php while ($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td><?= $row['title'] ?></td>
        <td><?= $row['genre'] ?></td>
        <td><?= $row['creator'] ?></td>
    </tr>
    <?php endwhile ?>
</table>

<?php endif ?>

<?php require_once("../includes/footer.php"); ?>