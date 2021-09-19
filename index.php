<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <title>問題1</title>
    <style>
        table {
            margin: 10px;
        }
        td {
            border: 1px solid black;
            padding: 3px;
        }
    </style>
</head>
<body>
<table>
  <?php
  for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 9; $b++) {
      echo '<td>' . $a * $b . '</td>';
    }
    echo '</tr>';
  }
  ?>
</table>
</body>
</html>
