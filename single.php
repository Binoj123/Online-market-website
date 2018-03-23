<?php require_once('ums/select-query.php') ?>


<?php
$id=$_POST['id'];
 $query = "SELECT * FROM  `sell_item` WHERE `id`='$id' ";
// echo "".$_POST['id'];
$result_set = mysqli_query($connction,$query);
 $record = mysqli_fetch_assoc($result_set);

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="single.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Document</title>

</head>
<body>
  <header>
      <div class="text-center"><img src="images/logo3.png" alt="logo" style="margin:20px; width:300px; height:auto;"></div>
</header>

<section >
  <div class="container main">
    <div class="heading">
        <h2 style="font-size:48px; color:rgb(254, 137, 0); padding-top:20px;"><?php echo $record['nameofsell'];?></h2>
    </div>

<div class="row upper">

<div class="col-md-4 image-con">
  <h4>Photo</h4>
  <img src="<?php echo $record['path']; ?>" alt="item-image" style="height:373px; border-radius:2px;">
</div>
<div class="col-lg-8">
    <h4>Description</h4><hr>
  <textarea style="padding:20px;"name="description" rows="12" cols="80"><?php echo $record['doi'];?></textarea>
</div>
</div>
<div class="row middle">
<div class="col-md-4">
  <h4 style="color:rgb(0, 177, 97);"><li class="fa fa-map-marker"></li>   Location</h4> <hr> <br>

  <p style="color:rgb(254, 137, 0);"><?php echo $record['city'];?>,&nbsp<?php echo $record['location'];?></p><br>

  <h4 style="color:rgb(0, 155, 254);"><li class="fa fa-address-card"></li>   Contact Details</h4>
  <hr>
  <br>

  <div class="seller" style="color:rgb(215, 91, 12);">
    <p>Seller Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<b> <?php echo $record['uname'];?></b></p>
    <p>Seller Contact Number &nbsp:<b> <?php echo $record['phone'];?></b></p>
    <p>Seller Email Address &nbsp&nbsp&nbsp&nbsp: <b><?php echo $record['city'];?></b></p><br>
  </div>

</div>
<div class="col-md-8 pricer">
  <h4><li class="fa fa-dollar"></li>   Price</h4><br>
  <p style="border-radius:5px; padding-left:10px; font-size:50px; background-color:rgba(251, 115, 4, .80); margin-right:48px;">Rs. <?php echo $record['price'];?>.00</p><br>
</div>
</div>
</div>
</section>
<footer>
<div class="container" >

  <div class="row full">
    <div class="col-md-6">
      <ul class="foot">
        <li><a href="">About Us</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Press</a></li>
        <li><a href="">iOS App</a></li>
        <li><a href="">Android App</a></li>
      </ul>
    </div>
<div class="col-md-6">
  <ul class="icons">
  <a href="#"><li class="fa fa-instagram"></li></a>
  <a href="#"><li class="fa fa-google-plus"></li></a>
  <a href="#"><li class="fa fa-twitter"></li></a>
  <a href="#"><li class="fa fa-facebook"></li></a>
  </ul>
</div>

  </div>

<div class="copyright">
  <p class="text-center">Copyrigth @ 2018 by Binoj.All rigth reserved.</p>
</div>
</div>
  </footer>
</body>
</html>
