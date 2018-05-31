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
    <div class="container mid">
      <div class="row">
        <div class="col-md-4 left">
          <h5>Bio of yourself</h5>
          <p>Name :<?php echo $name; ?></p>
          <p>Email :<?php echo $email; ?></p>
          <p>Telephone :<?php echo $telephone; ?></p>
          <p>District :<?php echo $district; ?></p>
          <p>City :<?php echo $city; ?></p>
        </div>
        <div class="col-md-8 right">
          <h5>Your posts</h5>
        </div>

      </div>
    </div>
  </body>
</html>
