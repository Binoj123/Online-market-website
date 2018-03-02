<?php require_once('inc/connection.php') ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  
</head>
<body>

<?php
$sql1 = "SELECT * FROM upload_image";

$result = $connction->query($sql1);

if($result){

while($row = mysqli_fetch_assoc($result)){
    $path = $row['path'];
    echo "<img src='$path'>";
    }
}
?>
</body>
</html>

