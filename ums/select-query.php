
<?php require_once('inc/connection.php') ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  
</head>
<body>

<?php
$query = "SELECT * FROM sell_item";

$result_set = mysqli_query($connction,$query);

if($result_set){
$record = mysqli_fetch_assoc($result_set);
echo "<pre>";
print_r($record);
echo "</pre>";
}
?><?php
$sql1 = "SELECT path FROM upload_image ORDER BY id DESC LIMIT 1";

$result = $connction->query($sql1);

if($result->num_rows>0){

while($row = $result->fetch_assoc()){
    $path = $row['path'];
    echo "<img src='$path'>";
    }
}
?>
</body>
</html>