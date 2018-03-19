  <?php require_once('ums/inc/connection.php') ?>
<pre>
  <?php

  print_r($_POST);
  $username = $_POST['username'];
  $password = $_POST['psw'];
  session_start();
   $_SESSION['susername'] = $username;
   $_SESSION['spassword'] = $password;
echo "username  {$_SESSION['susername']} <br>";
echo "password  {$_SESSION['spassword']} <br>";
  ?>
</pre>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>

  </head>
  <body>
<a href="index.php">home page</a>
  </body>
</html>
