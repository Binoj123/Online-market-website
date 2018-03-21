  <?php require_once('ums/inc/connection.php') ?>


  <?php

  // print_r($_POST);
  $username = $_POST['username'];
  $password = $_POST['psw'];


$query = "SELECT * FROM signup";

$result_set = mysqli_query($connction,$query);
$record = mysqli_fetch_assoc($result_set);
$rowcount=mysqli_num_rows($result_set);
$rows= $result_set->num_rows;

for($i=0;$i<=$rows;$i++){

$row=$result_set->fetch_array(MYSQLI_ASSOC);
$result_set->data_seek($i);
$email=$row['email'];
$qpassword=$row['password'];

if (($email==$username)&&($qpassword==$password)) {
  session_start();
   $_SESSION['susername'] = $username;
   $_SESSION['spassword'] = $password;
  ?>
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Succesfull..!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         You can accsess to sell your products and enjoy youeself.<br><br>
      Navigate to <a href='index.php'>Home page</a> or sell something immediatly by <a href="sell.php">Selling page</a>
        </div>
        <div class="modal-footer">
          <a href="index.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Close</a>
          <!-- <button type="button" class="btn btn-primary"><a href="index.php">Close</a></button> -->
        </div>
      </div>
    </div>
  </div>
<?php
  // echo "login sucessful";

   break;
// echo "username  {$_SESSION['susername']} <br>";
// echo "password  {$_SESSION['spassword']} <br>";
}else if ($i == $rows) {

  if (($email==$username)&&($qpassword==$password)) {
  // echo "login sucessful";
}else {
  // echo "Incorrect username or password";
  ?>
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Incorrect Email Address or Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         Your Credentials are incorrect! <br>Please make sure email address & password correct or not.<br><br>
      Navigate to <a href='index.php'>Home page</a> or you forgot the credentials <a href='signup.php'>Help</a> Now.
        </div>
        <div class="modal-footer">

          <a href="email.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Help</a>
<a href="index.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Home</a>
          <!-- <button type="button" class="btn btn-primary"><a href="index.php">Close</a></button> -->
        </div>
      </div>
    </div>
  </div>
<?php
}
}
// $path="photos/".$row['path'];
// $id=$row['id'];
}




  <?php

  print_r($_POST);
  $username = $_POST['username'];
  $password = $_POST['psw'];
  session_start();
   $_SESSION['susername'] = $username;
   $_SESSION['spassword'] = $password;
// echo "username  {$_SESSION['susername']} <br>";
// echo "password  {$_SESSION['spassword']} <br>";


  ?>
</pre>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">




    <title>Login status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>

        <div class="text-center"><img src="../images/logo3.png" alt="logo" style="width:30%; height:auto; margin:50px;"></div>

<!--         <div class="text-center"><img src="images/logo3.png" alt="logo" style="width:30%; height:auto; margin:50px;"></div> -->


    </header>
    <div class="container" style="margin:430px 0 0 0">
      <a href="index.php" style="margin-top:500px;" >Home page</a>
    </div>

<script type="text/javascript">
$(document).ready(function () {

 $('#exampleModal').modal('show');


});
</script>


    <title>login</title>

  </head>
  <body>
<a href="index.php">home page</a>


  </body>
</html>
