<?php require_once('ums/inc/connection.php') ?>
<?php
$ids=$_POST['ids'];
echo $ids;
session_start();
if (isset($_SESSION['susername'])){
  $user = $_SESSION['susername'];
  $querys = "SELECT * FROM sell_item WHERE id='$ids'";
  $result_set = mysqli_query($connction,$querys);
  $record = mysqli_fetch_assoc($result_set);

    // $row=$result_set->fetch_array(MYSQLI_ASSOC);


    $name = $record['uname'];
    $email = $record['email'];
    $telephone = $record['phone'];
    $district = $record['location'];
    $city = $record['city'];
    $nameofsell = $record['nameofsell'];
    $catagory = $record['catagory'];
    $price = $record['price'];
    $conditionofitem = $record['conditionofitem'];
    $doi = $record['doi'];
    $path = $record['path'];
    echo $conditionofitem;
    echo $path;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Selling your items</title>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="sellstyle.css" type="text/css">
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" language="javascript"></script>
<script src="js/jquery-3.3.1.min.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
  <body>
    <header>
      <div class="container-fluid logo">
        <div class="row">
            <img class="text-center"src="images/logo3.png" alt="logo">
        </div>
<div class="hero">
  <h3 class="text-center">WHAT YOU LOOKING FOR SELL OUR CUSTOMERS...</h3>
</div>
</div>
<div class="container details">
  <form action="ums/insert-query.php" method="post" enctype="multipart/form-data">


  <div class="row">
<div class="col-lg-4 smalll">
<p>Persenal details</p>
<input type="text" name="uname" value=<?php echo $name; ?> placeholder="Name" class="form-control" required><br>
<input type="email" name="email" value=<?php echo $email; ?> placeholder="email" class="form-control" required><br>
<input type="text" name="phone" maxlength="9" pattern="^[_0-9]{1,}$" placeholder="(+94)Telephone Number"value=<?php echo $telephone; ?> class="form-control" required><br>
<div class="form-group">
<label for="sel1">Your location (District)</label>
<select class="form-control" name="district" id="sel1">
  <option <?php if($district == 'Colombo') echo"selected"; ?>>Colombo</option>
  <option <?php if($district == 'Gampaha') echo"selected"; ?>>Gampaha</option>
  <option <?php if($district == 'Kaluthara') echo"selected"; ?>>Kaluthara</option>
  <option <?php if($district == 'Kaluthara') echo"selected"; ?>>Galle</option>
  <option <?php if($district == 'Galle') echo"selected"; ?>>Matara</option>
  <option <?php if($district == 'Hambanthota') echo"selected"; ?>>Hambanthota</option>
  <option <?php if($district == 'Kegalle') echo"selected"; ?>>Kegalle</option>
  <option <?php if($district == 'Rathnapura') echo"selected"; ?>>Rathnapura</option>
  <option <?php if($district == 'Badulla') echo"selected"; ?>>Badulla</option>
  <option <?php if($district == 'Bandarawela') echo"selected"; ?>>Bandarawela</option>
  <option <?php if($district == 'Trinkomalee') echo"selected"; ?>>Trinkomalee</option>
  <option <?php if($district == 'Batticaloa') echo"selected"; ?>>Batticaloa</option>
  <option <?php if($district == 'Ampara') echo"selected"; ?>>Ampara</option>
  <option <?php if($district == 'Kandy') echo"selected"; ?>>Kandy</option>
  <option <?php if($district == 'Nuwara Eliya') echo"selected"; ?>>Nuwara Eliya</option>
  <option <?php if($district == 'Matale') echo"selected"; ?>>Matale</option>
  <option <?php if($district == 'Puththalama') echo"selected"; ?>>Puththalama</option>
  <option <?php if($district == 'Kurunegala') echo"selected"; ?>>Kurunegala</option>
  <option <?php if($district == 'Anuradhapura') echo"selected"; ?>>Anuradhapura</option>
  <option <?php if($district == 'Polonnaruwa') echo"selected"; ?>>Polonnaruwa</option>
  <option <?php if($district == 'Mannar') echo"selected"; ?>>Mannar</option>
  <option <?php if($district == 'Vavniya') echo"selected"; ?>>Vavniya</option>
  <option <?php if($district == 'Mullative') echo"selected"; ?>>Mullative</option>
  <option <?php if($district == 'Kilinochchi') echo"selected"; ?>>Kilinochchi</option>
  <option <?php if($district == 'Jaffna') echo"selected"; ?>>Jaffna</option>
</select><br>
</div>

<input type="text" name="city" value=<?php echo $city; ?> placeholder="City" class="form-control" required><br>
</div>
<div class="col-lg-1">

</div>
<div class="col-lg-7 large">
<p>Selling item details</p>
<div class="container">
<input type="text" name="nameofsell" value="<?php echo $nameofsell; ?>" placeholder="Name of selling item" class="form-control" required><br>
<div class="form-group">
<label for="sel2">Catagory</label>
<select class="form-control" name="catagory" id="sel2">
<option <?php if($catagory == 'Electronics') echo"selected"; ?>>Electronics</option>
<option <?php if($catagory == 'Cars & Vehicles') echo"selected"; ?>>Cars & Vehicles</option>
<option <?php if($catagory == 'Property') echo"selected"; ?> >Property</option>
<option <?php if($catagory == 'Jobs') echo"selected"; ?>>Jobs</option>
<option <?php if($catagory == 'Music & Instruments') echo"selected"; ?>>Music & Instruments</option>
<option <?php if($catagory == 'Work Overseas') echo"selected"; ?>>Work Overseas</option>
<option <?php if($catagory == 'Home & garden') echo"selected"; ?>>Home & garden</option>
<option <?php if($catagory == 'Fasion, healthy & beauty') echo"selected"; ?>>Fasion, healthy & beauty</option>
<option <?php if($catagory == 'Kids items') echo"selected"; ?>>Kids items</option>
<option <?php if($catagory == 'Business & industry') echo"selected"; ?>>Business & industry</option>
<option <?php if($catagory == 'Services') echo"selected"; ?>>Services</option>
<option <?php if($catagory == 'Education') echo"selected"; ?>>Education</option>
<option <?php if($catagory == 'Animals') echo"selected"; ?>>Animals</option>
<option <?php if($catagory == 'Food & Agriculture') echo"selected"; ?>>Food & Agriculture</option>
<option <?php if($catagory == 'Arts & Handmades') echo"selected"; ?>>Arts & Handmades</option>
<option <?php if($catagory == 'Hobby & Sports') echo"selected"; ?>>Hobby & Sports</option>
<option <?php if($catagory == 'Other') echo"selected"; ?>>Other</option>
</select>
</div><br>
<div class="row">
  <div class="col-lg-6">
    <label>Price(.00)</label><br>
  <input type="text" name="price" maxlength="15" pattern="^[_0-9]{1,}$" value="<?php echo $price; ?>"placeholder="Price x (Rs.x.00)" class="form-control" required><br>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
<label for="sel3">Condition</label>
<select  class="form-control" name="conditionofitem" id="sel3">
  <option <?php if($conditionofitem == 'None') echo"selected"; ?>>None</option>
  <option <?php if($conditionofitem == 'New') echo"selected"; ?>>New</option>
  <option <?php if($conditionofitem == 'Used') echo"selected"; ?>>Used</option>
</select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="des">
      <textarea name="doi" class="form-control" rows="12" placeholder="Description of Item" required><?php echo $doi; ?></textarea>
      <br>
    </div>
  </div>
  <div class="col-lg-6">

        <input name="fileupload" id="fileupload" type="file" value="<?php echo $path ?>" />
    <hr/>
    <div id="dvPreview">
    </div>

  </div>
  </div>



  </div>
  </div>

     <input type="submit" class="btn btn-warning btn-block" name="submit" >

</div>

</div>



</form>
</header>


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
    <script language="javascript" type="text/javascript">
    $(function () {
      $("#fileupload").change(function () {
          $("#dvPreview").html("");
          var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
          if (regex.test($(this).val().toLowerCase())) {
              if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                  $("#dvPreview").show();
                  $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
              }
              else {
                  if (typeof (FileReader) != "undefined") {
                      $("#dvPreview").show();
                      $("#dvPreview").append("<img height='260' width='280'/>");
                      var reader = new FileReader();
                      reader.onload = function (e) {
                          $("#dvPreview img").attr("src", e.target.result);
                      }
                      reader.readAsDataURL($(this)[0].files[0]);
                  } else {
                      alert("This browser does not support FileReader.");
                  }
              }
          } else {
              alert("Please upload a valid image file.");
          }
      });
    });
    </script>

</body>

</html>
<?php
}

else {
  ?>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Selling your items</title>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="sellstyle.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" language="javascript"></script>
  <script src="js/jquery-3.3.1.min.js" type="text/javascript" language="javascript"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  </head>
    <body>
      <header>
          <div class="text-center"><img src="images/logo3.png" alt="logo"></div>

      </header>
      <div class="container">
        <div class="wrong">
          <h1 class="text-center">oops something went wrong....!</h1>
          <p class="text-center">You wish to sell your items in patas.lk. Sure please first you should login
          your account first.<br> Please enter login button below. If your not our customer yet please sign up now. click signup button
        now. </p>
        <div class="btn-center">
          <input type="button" class="btn btn-info" value="Sign up" onclick=" relocate_sign()">
          <input type="button" class="btn btn-info" value="Home page" onclick=" relocate_home()">
          <input type="button" class="btn btn-info" value="Login" onclick="document.getElementById('id01').style.display='block'">
          </div>
        </div>
      </div>
      <div id="id01" class="modal">
        <div class="mheading">
          <h2 class="text-center">Login to patas.lk</h2>
        </div>
<form accept-charset="UTF-8" action="" class="modal-content animate" method="post"  >


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
      <script type="text/javascript">
   function relocate_home()
 {
      location.href = "../index.php";
 }
 function relocate_sign()
{
    location.href = "../patas/signup.php";
}
    </script>
    <!-- <div class="modal fade" id="memberModall" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="memberModall">You should signing in first!</h4>
              </div>
              <div class="modal-body">
                <p>However the account provided is not known.<BR>
                If you just got invited to the group, please wait for a day to have the database synchronized.</p>

                <p>You will now be shown the Demo site.</p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-info" value="Login page" onclick=" relocate_home()"> -->
           <!--    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> -->
               <!-- </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
        $(document).ready(function () {

         $('#memberModall').modal('show');

        });
        function relocate_home()
        {
        location.href = 'index.php';
        }
        </script> -->
    </body>
    </html>

  <?php
echo "<script>
$(document).ready(function () {

 $('#memberModall').modal('show');

});
function relocate_home()
{
location.href = 'index.php';
}
</script>";
// header("location:index.php");
}
?>
