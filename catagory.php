<?php
$catagory;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Choose your Catagory</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="catstyle.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
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
            <h2>Choose your favourite Catagory</h2>
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



      <div class="container-fluid">

          <section class="meal">
            <ul class="meal-showcase clearfix">
              <li>
              <figure class="meal-photo">
                <div class="centerd centerd1">
                  <h4>Electronics</h4>
                </div>
                <?php
                $catagory="electronics";
                 ?>
                <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/electronics.jpg" alt=""></a>

              </figure>
              </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd2">
            <h4>Cars & Vehicles</h4>
          </div>
          <?php
          $catagory="Cars & Vehicles";
           ?>
            <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/vehicle.jpg" alt=""></a>
        </figure>
        </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd3">
            <h4>Property</h4>
          </div>
          <?php
          $catagory="property";
           ?>
          <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/property.jpg" alt=""></a>
        </figure>
        </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd4">
            <h4>Jobs</h4>
          </div>
          <?php
          $catagory="jobs";
           ?>
          <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/jobs.jpg" alt=""></a>

        </figure>
        </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd5">
            <h4>Music & Instruments</h4>
          </div>
          <?php
          $catagory="music";
           ?>
          <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/instrument1.jpg" alt=""></a>
        </figure>
        </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd6">
            <h4>Work Overseas</h4>
          </div>
          <?php
          $catagory="work_overseas";
           ?>
          <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/workseas.jpg" alt=""></a>
        </figure>
        </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd7">
            <h4>Home & Garden</h4>
          </div>
          <?php
          $catagory="home_garden";
           ?>
          <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/garden.jpg" alt=""></a>
        </figure>
        </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd8">
            <h4>Fasion, Healthy & Beauty</h4>
          </div>
          <?php
          $catagory="fashion";
           ?>
          <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/beauty.jpg" alt=""></a>
        </figure>
        </li>
        <li>
        <figure class="meal-photo">
          <div class="centerd centerd9">
            <h4>Kids items</h4>
          </div>
          <?php
          $catagory="kids_item";
           ?>
          <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/baby.jpg" method="post" alt=""></a>

        </figure>
        </li>
  <li>
  <figure class="meal-photo">
    <div class="centerd centerd10">
      <h4>Services</h4>
    </div>
    <?php
    $catagory="service";
     ?>
      <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/service.jpg" alt=""></a>
  </figure>
  </li>
  <li>
  <figure class="meal-photo">
    <div class="centerd centerd11">
      <h4>Education</h4>
    </div>
    <?php
    $catagory="education";
     ?>
    <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/education.jpg" alt=""></a>
  </figure>
  </li>
  <li>
  <figure class="meal-photo">
    <div class="centerd centerd12">
      <h4>Animals</h4>
    </div>
    <?php
    $catagory="animals";
     ?>
    <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/animal.jpg" alt=""></a>

  </figure>
  </li>
  <li>
  <figure class="meal-photo">
    <div class="centerd centerd13">
      <h4>Food & Agriculture</h4>
    </div>
    <?php
    $catagory="food";
     ?>
    <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/agri.jpg" alt=""></a>

  </figure>
  </li>
  <li>
  <figure class="meal-photo">
    <div class="centerd centerd14">
      <h4>Arts & Handmades</h4>
    </div>
    <?php
    $catagory="arts";
     ?>
    <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/art.jpg" alt=""></a>

  </figure>
  </li>
  <li>
  <figure class="meal-photo">
    <div class="centerd centerd15">
      <h4>Hobby & Sports</h4>
    </div>
    <?php
    $catagory="hobby";
     ?>
    <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/sport1.jpg" alt=""></a>

  </figure>
  </li>
  <li>
  <figure class="meal-photo">
    <div class="centerd centerd16">
      <h4>Other</h4>
    </div>
    <?php
    $catagory="other";
     ?>
    <a href="viewitem.php?catagory=<?php echo $catagory; ?>"><img src="images/logo1.jpg" alt=""></a>

  </figure>
  </li>
            </ul>

          </section>
      </div>
      <footer>
    <div class="container">

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
      <script language="javascript">

   function DoPost(){
     var txt = $("input").val();
      $.post("viewitem.php",{suggest: txt}, function(){ window.location.href = 'viewitem.php'} );  //Your values here..
   }

</script>
  </body>
</html>


<!-- <figure class="meal-photo">
<img src="images/home.jpg" alt="">
</figure>
</li>
<li>
<figure class="meal-photo">
<img src="images/art.jpg" alt="">
</figure>
</li>
<li>
<figure class="meal-photo">
<img src="images/sport.jpg" alt="">
</figure>
</li>
  </ul>

</section> -->
