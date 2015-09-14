<? include 'includes/header.php'; ?>
<h1>Multiplication Table</h1>
<?

  echo "<table class='table table-hover'>";
    for ($row = 1; $row < 11; $row++) {
      echo "<tr>";
      for($col = 1; $col < 11; $col++) {
        echo "<td>" .$col*$row. "</td>";
      }
      echo "</tr>";
    }
  echo "</table>";

?>


<? include 'includes/footer.php'; ?>
