<?php require_once("../includes/header.php") ?>

<?php

    $sql = "SELECT * FROM games";
    $result    = mysqli_query($conn, $sql);
    echo $result;

?>

<h2>All Games</h2>

<?php if ($error = mysqli_error($conn)): ?>

    There was a problem: <?= $error ?>

<?php else: ?>

<table class='table table-hover'>
    <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Creator</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td><?php $row['title'] ?></td>
        <td><?php $row['genre'] ?></td>
        <td><?php $row['creator'] ?></td>
    </tr>
    <?php endwhile ?>
</table>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>