

<?php

$target_path = "photos/";

$target_path = $target_path . basename( $_FILES['uploadedfilee']['name']);

if(move_uploaded_file($_FILES['uploadedfilee']['tmp_name'], $target_path))

{

$conn = new mysqli("localhost", "root", "", "test_image");

$sql = "INSERT INTO upload_image(`path`) VALUES ('$target_path')";

if ($conn->query($sql) === TRUE) {

echo "<br><br>";

} else {

echo "Error: " . $sql . "<br>" . $conn->error;

}

$sql1 = "SELECT path FROM upload_image order by id desc limit 1";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {

// output data of each row

while($row = $result1->fetch_assoc()) {

$path=$row["path"];

echo "<img src='$path' height='280' width='280' />";

}

}

$conn->close();

}

?>
