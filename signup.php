<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signup page</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="signstyle.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container-fluid logo">
      <div class="row">
        <img src="images/logo3.png" alt="logo">
      </div>

</div>
    <div class="container info">
      <div class="hero">
      <h3 class="text-center">Lets join with us...</h3><br>
      </div>
    <form class="" action="ums/insert_sign.php" method="post">
      <input type="text" name="uname" placeholder="Name" class="form-control"><br>
      <input type="email" name="email" placeholder="Email" class="form-control"><br>
      <input type="text" name="phone" placeholder="Telephone Number" class="form-control" ><br>
      <div class="form-group">
      <label style="color:white;" for="sel1">Select your location (District)</label>
      <select class="form-control" name="location" id="sel1">
        <option>Colombo</option>
        <option>Gampaha</option>
        <option>Kaluthara</option>
        <option>Galle</option>
        <option>Matara</option>
        <option>Hambanthota</option>
        <option>Kegalle</option>
        <option>Rathnapura</option>
        <option>Badulla</option>
        <option>Bandarawela</option>
        <option>Trinkomalee</option>
        <option>Batticaloa</option>
        <option>Ampara</option>
        <option>Kandy</option>
        <option>Nuwara Eliya</option>
        <option>Matale</option>
        <option>Puththalama</option>
        <option>Kurunegala</option>
        <option>Anuradhapura</option>
        <option>Polonnaruwa</option>
        <option>Mannar</option>
        <option>Vavniya</option>
        <option>Mullative</option>
        <option>Kilinochchi</option>
        <option>Jaffna</option>
      </select>
      </div>
      <input type="text" name="city" placeholder="City" class="form-control"><br>
      <input class="form-control" placeholder="Password" type="password" name="password" value=""><br>
      <input class="form-control" placeholder="Confirm password" type="password" name="cpassword" value=""><br>
<input type="submit" class="btn btn-warning btn-block" style="" name="" value="submit">
    </form>

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
    <p class="text-center">Copyrigth @ 2018 by patas.lk.All rigth reserved.</p>
  </div>
  </div>
    </footer>
  </body>
</html>
