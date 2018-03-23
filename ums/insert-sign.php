<?php require_once('inc/connection.php') ?>

<?php

// if (isset($_POST ['submit'])) {
// print_r($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$district = $_POST['district'];
$city = $_POST['city'];
$password = $_POST['password'];


$query = "INSERT INTO signup(name,email,telephone,district,city,password)VALUES('{$name}','{$email}',{$telephone},'{$district}','{$city}','{$password}')";
// $result = mysqli_query($connction,$query);


  // $username = $_POST['username'];

  $querys = "SELECT * FROM signup";

  $result_set = mysqli_query($connction,$querys);
  $record = mysqli_fetch_assoc($result_set);
  $rowcount=mysqli_num_rows($result_set);
  $rows= $result_set->num_rows;

  for($i=0;$i<$rows;$i++){

  $row=$result_set->fetch_array(MYSQLI_ASSOC);
  $result_set->data_seek($i);
  $emailCheck=$row['email'];

  if ($emailCheck != $email) {

  if ($i == $rows-1) {
    // echo "1 record added <br>";
    $result = mysqli_query($connction,$query);
    ?>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thank you for join with us..!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          Now you a member of patas.lk. You can sell or buy anything form our marketstore.<br><br>
        Navigate to <a href='../signup.php'>Home page</a> or forgot your password of this email <a href='../index.php'>Help</a> Now.
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Retry</button> -->
            <!-- <a href="../signup.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Retry another email</a> -->
  <a href="../index.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Home</a>
            <!-- <button type="button" class="btn btn-primary"><a href="index.php">Close</a></button> -->
          </div>
        </div>
      </div>
    </div>
  <?php
  }

  }else {
    // echo "database query failed.<br>";
  //   echo $rowcount."<br>";
  // $queryd = "DELETE FROM signup WHERE id='%$rowcount'";
  // $resultd = mysqli_query($connction,$queryd);
  // if ($resultd) {
  //   echo "last record deleted";
  //     echo $rowcount."<br>";
  // }else {
  //   echo "failed to delete";
  // }
  ?>
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Email Address Already exist..!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         This Email already exist! <br>Please make sure have you already signup.<br><br>
      Try with another email <a href='../signup.php'>Signup page</a> or forgot your password of this email <a href='../email.php'>Help</a> Now.
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Retry</button> -->
          <a href="../signup.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Retry another email</a>
<a href="../email.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Help</a>
          <!-- <button type="button" class="btn btn-primary"><a href="index.php">Close</a></button> -->
        </div>
      </div>
    </div>
  </div>
<?php
  break;
  }
}






   $connction->close();




// }

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Signup status</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
     <header>
         <div class="text-center"><img src="../images/logo3.png" alt="logo" style="width:30%; height:auto; margin:50px;"></div>

     </header>
     <div class="container" style="margin:430px 0 0 0">
       <a href="../index.php" style="margin-top:500px;" >Home page</a>
     </div>
<script type="text/javascript">
$(document).ready(function () {

 $('#exampleModal').modal('show');


});
</script>
   </body>
 </html>
