
<?php require_once('ums/inc/connection.php') ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  
</head>
<body>

<?php
$query = "SELECT * FROM sell_item";

$result_set = mysqli_query($connction,$query);
echo "hi im binoj thia gonna be my first codding that I havrn't see the key boa";
if($result_set){
$record = mysqli_fetch_assoc($result_set);
echo "<pre>";
print_r($record);
echo "</pre>";
}
?>
</body>
</html>