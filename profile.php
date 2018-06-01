<?php require_once('ums/inc/connection.php') ?>
<?php
session_start();
$user = $_SESSION['susername'];
$querys = "SELECT * FROM signup WHERE email='$user'";
$result_set = mysqli_query($connction,$querys);
$record = mysqli_fetch_assoc($result_set);

  // $row=$result_set->fetch_array(MYSQLI_ASSOC);


  $name = $record['name'];
  $email = $record['email'];
  $telephone = $record['telephone'];
  $district = $record['district'];
  $city = $record['city'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your Profile</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="profstyle.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<script src="js/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="logo">
            <img src="images/logo3.png" alt="logo">
          </div>
        </div>
        <div class="col-md-4">
          <header>
            <h2>Hi <?php echo $name; ?>, Welcome to your profile..!</h2>
          </header>
        </div>
        <div class="col-md-4">
          <div class="right-corner">
            <h5><a href="index.php">Back to << Home Page</a>
            </h5>
          </div>

        </div>
      </div>
    </div>
    <div class="container first">
      <div class="row">
        <div class="col-md-4">
          <h5>Bio of yourself</h5>
        </div>
        <div class="col-md-8">
            <h5>Your posts</h5>
        </div>
      </div>
    </div>
    <div class="container mid">
      <div class="row">
        <div class="col-md-1.7 left">

          <p>Name </p><br>
          <p>Email </p><br>
          <p>Telephone </p><br>
          <p>District </p><br>
          <p>City </p>
        </div>
        <div class="col-md-2.3 about">
          <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" disabled><br>
          <input type="text" class="form-control" name="name" value="<?php echo $email; ?>" disabled><br>
          <input type="text" class="form-control" name="name" value="<?php echo $telephone; ?>" disabled><br>
          <input type="text" class="form-control" name="name" value="<?php echo $district; ?>" disabled><br>
          <input type="text" class="form-control" name="name" value="<?php echo $city; ?>" disabled>
          <!-- <p id="editor"></p> -->
        </div>
        <div class="col-md-8 right">

        </div>

      </div>
      <div class="row but">
        <div class="col-md-3">
        <button type="button" onclick="myFunction()" class="form-control" name="button">Edit info</button><br>
          <input type="submit" class="form-control" name="sub" value="Update Info">
        </div>
      </div>
    </div>
    <script type="text/javascript">
    function myFunction() {
  // document.getElementById("editor").innerHTML = "Hello World";
// document.getElementsByTagName("INPUT")[0].setAttribute("disabled", false);
document.getElementsByTagName("INPUT")[0].removeAttribute("disabled");
document.getElementsByTagName("INPUT")[1].removeAttribute("disabled");
document.getElementsByTagName("INPUT")[2].removeAttribute("disabled");
document.getElementsByTagName("INPUT")[3].removeAttribute("disabled");
document.getElementsByTagName("INPUT")[4].removeAttribute("disabled");
  }
    // $(document).ready(function (){
    //          });
    </script>
  </body>
</html>
