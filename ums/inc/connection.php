<?php
$connction = mysqli_connect('localhost','root','','patas');
//checking the connection
if (mysqli_connect_errno()) {
  die('database connection failed'. mysqli_connect_errno());
}else {
  echo "connection successful";
}
 ?>
