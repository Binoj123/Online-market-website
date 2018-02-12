<?php require_once('inc/connection.php') ?>
<?php
print_r($_POST);

$uname = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$city = $_POST['city'];
$nameofsell = $_POST['nameofsell'];
$catagory = $_POST['catagory'];
$price = $_POST['price'];
$conditionofitem =$_POST['conditionofitem'];
$doi =$_POST['doi'];

$query = "INSERT INTO sell_item(uname,email,phone,location,city,nameofsell,catagory,price,conditionofitem,doi)VALUES('{$uname}','{$email}',{$phone},'{$location}','{$city}','{$nameofsell}','{$catagory}',{$price},'{$conditionofitem}','{$doi}')";

$result = mysqli_query($connction,$query);
if ($result) {
  echo "1 record added";
}else {
  echo "database query failed.";
}

//if ($_POST ["submit"]) {

  $target_path = "photos/";

  $target_path = $target_path . basename( $_FILES['fileupload']['name']);

  if(move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path))

  {

  $conn = new mysqli("localhost", "root", "", "patas");

  $sql = "INSERT INTO upload_image(`path`) VALUES ('$target_path')";

  if ($conn->query($sql) === TRUE) {

  echo "<br><br>";

  } else {

  echo "Error: " . $sql . "<br>" . $conn->error;

  }






  $conn->close();

  }

//}

 ?>
