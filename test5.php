<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];

  echo $name;
}




?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="test5.php" method="post">
      <input type="text" name="name" value="">
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
