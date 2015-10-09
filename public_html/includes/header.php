<?php
    
session_start();
$views = 0;
if ($_SESSION["views"])
    $_SESSION["views"] = $_SESSION["views"] + 1;
else
    $_SESSION["views"] = 1;

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
if (!$conn) {
    die('Could not connect: ');
}

function printStr(&$str) {
  if (isset($str)) {
    return $str;
  } else {
    return "";
  }
}

?>

<html> 
  <head>
    <base href="https://whispering-lowlands-3713.herokuapp.com/public_html/">
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>PHP Includes</title> 
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/public_html">PHP Includes</a>
          </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="game/index.php">Games</a></li>
                <li><a href="game/new.php">Add a Game</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Playground Projects<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="multiplication.php">Multiplication</a></li>
                    <li><a href="function.php">Function</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['user_id'])): ?>
                  <li><a href="sessions/destroy.php"><?= $_SESSION['email'] ?></a></li>
                  <li><a href="sessions/destroy.php"><?= $_SESSION['email'] ?>Logout</a></li>
                <?php else: ?>
                  <li><a href="sessions/new.php">Login</a> </li>
                <?php endif ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
 
