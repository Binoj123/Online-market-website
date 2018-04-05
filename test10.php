<?php require_once('ums/inc/connection.php') ?>
<?php
$emailf = $_POST['emailf'];
$commentf = $_POST['commentf'];

$query = "INSERT INTO feedback(emailf,commentf)VALUES('{$emailf}','{$commentf}')";
$result = mysqli_query($connction,$query);
if ($result) {
echo "succesfullty added";
}else {
echo $connction->error;
}
 ?>
