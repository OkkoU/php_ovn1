<?php
  $myschool = "Prakticum";
  $int = 2;
  $float = 1.5;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <?php
      echo "$myschool";
      echo "<br>";
      echo "$int * $float = " . $int * $float;
      echo "<br>";
      echo '<a href="https://prakticum.fi/">Prakticums hemsida</a>'
    ?>
  </body>
</html>
