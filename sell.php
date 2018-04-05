<?php require_once('ums/inc/connection.php') ?>
<?php

session_start();
if (isset($_SESSION['susername'])){
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
<html>
<head>
  <meta charset="utf-8">
  <title>Selling your items</title>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="sellstyle.css" type="text/css">
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" language="javascript"></script>
<script src="path/to/your/jquery.MultiFile.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
  <body>
    <header>
      <div class="container-fluid logo">
        <div class="row">
          <img src="images/logo3.png" alt="logo">
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
<input type="text" name="nameofsell" placeholder="Name of selling item" class="form-control" required><br>
<div class="form-group">
<label for="sel2">Catagory</label>
<select class="form-control" name="catagory" id="sel2">
<option>Electronics</option>
<option>Cars & Vehicles</option>
<option>Property</option>
<option>Jobs</option>
<option>Music & Instruments</option>
<option>Work Overseas</option>
<option>Home & garden</option>
<option>Fasion, healthy & beauty</option>
<option>Kids items</option>
<option>Business & industry</option>
<option>Services</option>
<option>Education</option>
<option>Animals</option>
<option>Food & Agriculture</option>
<option>Arts & Handmades</option>
<option>Hobby & Sports</option>
<option>Other</option>
</select>
</div><br>
<div class="row">
  <div class="col-lg-6">
    <label>Price(.00)</label><br>
  <input type="text" name="price" maxlength="15" pattern="^[_0-9]{1,}$" placeholder="Price x (Rs.x.00)" class="form-control" required><br>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
<label for="sel3">Condition</label>
<select  class="form-control" name="conditionofitem" id="sel3">
  <option>None</option>
  <option>New</option>
  <option>Used</option>
</select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="des">
      <textarea name="doi" class="form-control" rows="12" placeholder="Description of Item" required></textarea>
      <br>
    </div>
  </div>
  <div class="col-lg-6">

    <input name="fileupload" id="fileupload" type="file"  />
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
  <div id="memberModal" class="modal" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="memberModalLabel">You should signing in first!</h4>
        </div>
        <div class="modal-body">
          <p>However the account provided is not known.<BR>
          If you just got invited to the group, please wait for a day to have the database synchronized.</p>

          <p>You will now be shown the Demo site.</p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-info" value="Login page" onclick=" relocate_home()">
     <!--     <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
  </div>
  <?php
echo "<script>
$(document).ready(function () {

 $('#memberModal').modal('show');

});
function relocate_home()
{
location.href = 'index.php';
}
</script>";
// header("location:index.php");
}
?>
