<?php require_once('ums/inc/connection.php') ?>
<?php
session_start();
 if (isset($_POST['submit'])) {

$emailf = $_POST['emailf'];
$commentf = $_POST['commentf'];

$query = "INSERT INTO feedback(emailf,commentf)VALUES('{$emailf}','{$commentf}')";
$result = mysqli_query($connction,$query);

// if ($result) {
// echo "succesfullty added";
// }else {
// echo $connction->error;
// }
}



if (isset($_POST['logout'])) {
    //real search code goes here
    // remove all session variables

session_unset();
// destroy the session
session_destroy();
}
 ?>


<!DOCTYPE html>
<html>
  <head>
    <!--<meta charset="utf-8">-->
    <title>Online Marketplace</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<script src="js/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="images/logo3.png" alt="logo">

      </div>
      <div class="container-fluid">
        <div class="row">
          <ul class="mainnav">
            <?php
            if (isset($_SESSION['susername'])){
              ?>
                <li><a href="profile.php" id="hideLogout">PROFILE</a></li>
              <?php
            }else{
              ?>
              <li><a href="#login" id="hideLogout" onclick="document.getElementById('id01').style.display='block'">LOGIN</a></li>
              <?php
            }

             ?>

            <li><a href="signup.php" onclick="document.getElementById('id02').style.display='block'">SIGN UP</a></li>
            <li><a href="catagory.php">CATOGORY</a></li>
            <li><button id="click" style="background:none; font-size:14px; border-bottom:2px; padding:0; font-weight:bold;">ABOUT US</button></li>
            <li><button id="clicko" style="background:none; font-size:14px; border-bottom:2px; padding:0; font-weight:bold;">OUR CUSTOMERS</button></li>
            <?php
            if (isset($_SESSION['susername'])){
              ?>
              <form action="index.php" method="post">
              <button type="submit" title="Logout" name="logout" class="logout"><li class="fa fa-power-off"></li></button>
              </form>
              <?php
            }

             ?>
          </ul>
        </div>
      </div>
      <div id="id01" class="modal">
        <div class="mheading">
          <h2 class="text-center">Login to patas.lk</h2>
        </div>
<form accept-charset="UTF-8" action="/patas/login.php" class="modal-content animate" method="post"  >


    <div  class="imgcontainer">
      <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
      <img src="images/user2.jpg" alt="User" class="avatar">
    </div>

    <div class="container">

      <label for="uname"><b>Email</b></label>
      <input type="email" style="width:100%; height:45px; padding-left:10px;" name="username" required>
      <br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" style="padding-left:10px; height:45px;"  name="psw" required>
        <!-- <input type="submit" name="submit" value="submit"> -->

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">

      <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="email.php">password?</a></span>
    </div>
</form>
</div>


      <div class="hero">
        <h1>The Srilankans laragest online marketplace</h1>

        <div class="button-awsom">
          <a href="viewitem.php" class="btn btn-half">Buy something</a>
          <a href="sell.php" class="btn btn-full">I wanna sell it</a>
        </div>
      </div>
    </header>
  <selection class="features">
    <div id="div1">
<h3 class="text-center">ABOUT PATAS.LK</h3>
<div class="text-center">
<p class="copy">Patas.lk is a online webstore that you will able to buy any goods from here and also meet customers and sellers at a one place.</p>
</div>

<div class="container forpara">
  <div class="row">
    <div class="col-sm-3">
      <div class="text-center">
<li class="fa fa-users"></li>
      </div>
      <h4 class="text-center">100%<b> Free</b> <br>Service</h4>
    <p class="arranging">Our service is 100% free and our mission is meet best sellers and customers at one market place.</p>
</div>
<div class="col-sm-3">
    <div class="text-center">
  <li class="fa fa-certificate"></li>
</div>
    <h4 class="text-center">Oppotunities for Overseas sales</h4>
<p class="arranging">There has been noted patas.lk growth in the various categories of homeware, pets, fashion and sporting goods and look forward various choices.</p>
</div>
<div class="col-sm-3">
    <div class="text-center">
  <li class="fa fa-shopping-basket"></li>
</div>
    <h4 class="text-center">Get exact what you orderd</h4>
<p class="arranging">We have already ensure our sellers give you exactly what it's shown on the site.Dear customers you can count on us for quality and integrity.</p>
</div>
<div class="col-sm-3">
    <div class="text-center">
  <li class="fa fa-dollar"></li>
</div>
    <h4 class="text-center">Greater transparency of prices & products</h4>
<p class="arranging">Here customers and offer convenient way to compare prices and products from a single source.</p>
</div>
  </div>
</div>
</div>
  </selection>
  <section class="meal">
    <ul class="meal-showcase clearfix">
      <li>
      <figure class="meal-photo">
        <a href="catagory.php"><img src="images/guitar.jpg" alt=""></a>
      </figure>
      </li>
<li>
<figure class="meal-photo">
  <a href="catagory.php"><img src="images/frock.jpg" alt=""></a>
</figure>
</li>
<li>
<figure class="meal-photo">
  <a href="catagory.php"><img src="images/apple.jpg" alt=""></a>
</figure>
</li>
<li>
<figure class="meal-photo">
  <a href="catagory.php"><img src="images/camera.jpg" alt=""></a>
</figure>
</li>
<li>
<figure class="meal-photo">
  <a href="catagory.php"><img src="images/1.jpg" alt=""></a>
</figure>
</li>
<li>
<figure class="meal-photo">
  <a href="catagory.php"><img src="images/home.jpg" alt=""></a>
</figure>
</li>
<li>
<figure class="meal-photo">
  <a href="catagory.php"><img src="images/art.jpg" alt=""></a>
</figure>
</li>
<li>
<figure class="meal-photo">
  <a href="catagory.php"><img src="images/sport.jpg" alt=""></a>
</figure>
</li>
    </ul>

  </section>
  <section class="mobile">
    <h3 class="text-center">HOW IT WORKS A SIMPLE 1,2,3</h3>
    <div class="container">
  <div class="row">
<div class="col-md-6">
  <div class="pic">
<img src="images/samsung.png" alt="image">
</div>
</div>
<div class="col-md-6">
<div class="work-step">
<div>1</div>
<p>Create an account with your personal details. click signup on above of page to this process.</p>
<div>2</div>
<p>Now you are a seller of patas.lk. You are able to deal with our customers. As a seller you can sell any item in our site.</p>
<div>3</div>
<p>Hi Customers! Take your goods which seller bring to your door step!</p>
<a href="https://www.apple.com/lae/ios/app-store/"><img src="images/img2.png" alt="image2"></a>
<a href="https://play.google.com/store?hl=en"><img src="images/img3.png" alt="image2"></a>
<a href="signup.php"><img src="images/img4.png" alt="image2"></a>
</div>
</div>
  </div>

    </div>

  </section>
  <!-- <section class="cities">
    <h3 class="text-center">WE ARE CURRENTLY IN THESE CITIES</h3>
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <img src="images/srilanka.jpg" alt="img-city">
<h4 class="text-center">SriLanka</h4>
<p><li class="fa fa-shopping-basket"></li> 100,000+ happy customers</p>

    </div>
    <div class="col-lg-3">
      <img src="images/india.jpg" alt="img-city">
<h4 class="text-center">India</h4>
<p><li class="fa fa-shopping-basket"></li> 50,000+ happy customers</p>

    </div>
    <div class="col-lg-3">
      <img src="images/australia.jpg" alt="img-city">
<h4 class="text-center">Australia</h4>
<p><li class="fa fa-shopping-basket"></li> 20,000+ happy customers</p>

    </div>
    <div class="col-lg-3">
      <img src="images/singapore.jpg" alt="img-city">
<h4 class="text-center">Singapore</h4>
<p><li class="fa fa-shopping-basket"></li> 10,000+ happy customers</p>

    </div>

  </div>

</div>
  </section> -->
  <section class="testimonials">
    <div id="div2">
      <h3 class="text-center">OUR CUSTOMER CAN'T LIVE WITHOUT US</h3>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <blockquote>
        <p>
Actually i'm seller of patas.lk since last few years already i'm happy to say
this is my one and only website deal with best customers I had ever met.
Since those days to now I have already sold my goods without any complain why
patas.lk ensure me as good seller with higher ratings all the day. Thank you!

        </p>
        <cite><img src="images/cus.jpg" alt="customer">Nayana Madhuwantha</cite>

      </blockquote>

    </div>
    <div class="col-md-4">
      <blockquote>
        <p>
patas.lk is very fexible website and very easy to use. Also I'm a customer of
this website since last year. I glad to say here sellers are very responsible
and fair prices of goods in very good quality.
        </p>
        <br><br>
        <cite><img src="images/cus.jpg" alt="customer">Ashan Samarasinghe</cite>

      </blockquote>

    </div>
    <div class="col-md-4">
      <blockquote>
        <p>
I'm a customer of patas.lk. This is awsome website that we have ever seen.
I can easily manage my sellers using filters and also very quick quick response
make me happier.Further using catagory page that is easy to buy needs what I
exactly wants. the sellers who run this site are very fair and good sellers.
        </p>
        <cite><img src="images/cus.jpg" alt="customer">Pasan Avishka</cite>

      </blockquote>

    </div>

  </div>

</div>
  </div>
  </section>
  <section class="form">
    <div class="container">
<h3 class="text-center">WE WILL HAPPY TO HEAR YOU</h3>
  <form action="index.php" method="post">
<div class="row gap">

    <div class="col-md-4">
      <input type="text" name="emailf" placeholder="Email Address" class="form-control">
      <img src="images/logo3.png" alt="logo">
      </div>
  <!-- <input type="email" name="email" placeholder="Email" class="form-control"><br>
  <input type="password" name="password" placeholder="Password" class="form-control"> -->

    <div class="col-md-8 right_comment">
      <textarea name="commentf" class="form-control" rows="8" placeholder="Comments or Feedback about patas.lk" ></textarea>
  <input type="submit" class="btn btn-warning btn-block" value="Submit" name="submit">
    </div>
</div>
</form>
    </div>
  </section>

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
  <p class="text-center">Copyrigth @ 2018 by Patas.lk. All rigth reserved.</p>
</div>
</div>
  </footer>

  <script>
  // Get the modal
  var modal = document.getElementById('id01');
  var modal2 = document.getElementById('id02');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
          header("location:index.php");
      }else if (event.target == modal2) {
        modal.style.display = "none";
          header("location:index.php");
      }
    }


    $(document).ready(function (){
             $("#click").click(function (){
                 $('html, body').animate({
                     scrollTop: $("#div1").offset().top
                 }, 1000);
             });
             $("#clicko").click(function (){
                 $('html, body').animate({
                     scrollTop: $("#div2").offset().top
                 }, 1000);
             });

         });


  </script>
  </body>
</html>
