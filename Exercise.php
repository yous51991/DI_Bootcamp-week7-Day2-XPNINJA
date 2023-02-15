<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    <input type="text" name="size" placeholder="Enter the number of columns and rows">
    <button type="submit">Submit</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $size = $_POST["size"];
      echo "<table style='border-collapse: collapse; width: 50%;'>";

      for ($row = 1; $row <= $size; $row++) {
        echo "<tr style='height: 50px;'>";
        for ($col = 1; $col <= $size; $col++) {
          if (($row + $col) % 2 == 0) {
            echo "<td style='background-color: black; width: 50px; border: 1px solid black;'></td>";
          } else {
            echo "<td style='background-color: white; width: 50px; border: 1px solid black;'></td>";
          }
        }
        echo "</tr>";
      }

      echo "</table>";
    }
  ?>

</body>

</html>