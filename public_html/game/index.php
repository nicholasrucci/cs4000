<?php require_once("../includes/header.php"); ?>

<p>
    <a href="index.php">All Games</a>
    <a href="index.php?filter=title">By Title</a>
    <a href="index.php?filter=genre">By Genre</a>
</p>

<p>
<form method="get" action="index.php">
    Sort by:
    <input type="checkbox" id="filter_title" name="filter_title" value="title">
    <label for="sort_age">Age</label>
    <br>
    Filter by:
    <input type="checkbox" id="filter_genre" name="filter_genre" value="genre">
    <label for="filter_children">Children</label>
    <br>
    Search:
    <input type="text" name="search">
    <br>
    <input type="submit" name="submit" value="Go">
</form>
</p>

<?php

    $sql = "SELECT * FROM games";

    if (isset($_GET['filter']) && $_GET['filter_title'] == 'title') {
        $sql .= " ORDER BY title";
    }

    if (isset($_GET['sort']) && $_GET['filter_genre'] == 'genre') {
        $sql .= " ORDER BY genre";
    }

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
