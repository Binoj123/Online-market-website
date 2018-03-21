<?php require_once('ums/inc/connection.php') ?>
<?php
if (isset($_POST['submit'])) {

  $username = $_POST['username'];

  $query = "SELECT * FROM signup";

  $result_set = mysqli_query($connction,$query);
  $record = mysqli_fetch_assoc($result_set);
  $rowcount=mysqli_num_rows($result_set);
  $rows= $result_set->num_rows;

  for($i=0;$i<=$rows;$i++){

  $row=$result_set->fetch_array(MYSQLI_ASSOC);
  $result_set->data_seek($i);
  $email=$row['email'];


  if ($email==$username) {
    ?>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           Your Email is correct we will send email to enter new password to your account shortly.<br><br>
        Navigate to <a href='index.php'>Home page</a> Now.
          </div>
          <div class="modal-footer">
<a href="index.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Close</a>
            <!-- <button type="button" class="btn btn-primary"><a href="index.php">Close</a></button> -->
          </div>
        </div>
      </div>
    </div>
<?php

   break;
  // echo "username  {$_SESSION['susername']} <br>";
  // echo "password  {$_SESSION['spassword']} <br>";
  }else if ($i == $rows) {

  if (($email==$username)&&($qpassword==$password)) {

  }else {
    ?>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Incorrect Email Address</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           Your Email is incorrect! <br>Please make sure email address correct or not.<br><br>
        Navigate to <a href='index.php'>Home page</a> or if you wish to join with us again <a href='signup.php'>Home page</a> Now.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Retry</button>
            <a href="signup.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">SignUp</a>
<a href="index.php" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">Home</a>
            <!-- <button type="button" class="btn btn-primary"><a href="index.php">Close</a></button> -->
          </div>
        </div>
      </div>
    </div>
<?php
  // echo "<br>";
  // echo "<a href='index.php'>Home page</a><br>";
  }
  }
  // $path="photos/".$row['path'];
  // $id=$row['id'];
  }

}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forgot password</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <h2 style="margin-top:50px; color:rgb(64, 158, 236);" class="text-center">We are try to come up with some solution...!</h2>
    <div style="margin-top:100px; width:400px;" class="container form">

      <form action="email.php" method="post">
        <label>Enter your Email address</label>
      <input type="text" class="form-control" name="username" value=""><br>
      <input type="submit" class="btn btn-info" name="submit" value="submit">
      </form>
    </div>

<script type="text/javascript">
$(document).ready(function () {

 $('#exampleModal').modal('show');


});
</script>
  </body>
</html>
