<? include '../includes/header.php'; ?>

<form class="form-horizontal col-md-6" method="post" action="create.php">
    <legend>Food DB</legend>
    <div class="col-lg-10">
        <input class="form-control" type="text" name="name" placeholder="Food">
    </div>
    <div class="col-lg-10">
        <input class="form-control" type="text" name="type" placeholder="Type">
    </div>
    <div class="col-lg-10">
        <input class="form-control" type="text" name="where" placeholder="Where to find">
    </div>
    <div class="col-lg-10">
        <input class="form-control" type="text" name="rating" placeholder="Rating">
    </div><br>
    <div class="col-lg-10">
        <input class="btn btn-success" type="submit" value="Add Food">
    </div>
</form>

<? include '../includes/footer.php'; ?>
