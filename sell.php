
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Selling your items</title>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="sellstyle.css" type="text/css">
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
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
<input type="text" name="uname" placeholder="Name" class="form-control"><br>
<input type="email" name="email" placeholder="Email" class="form-control"><br>
<input type="text" name="phone" placeholder="Telephone Number" class="form-control" ><br>
<div class="form-group">
<label for="sel1">Select your location (District)</label>
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
</div>
<div class="col-lg-1">

</div>
<div class="col-lg-7 large">
<p>Selling item details</p>
<div class="container">
<input type="text" name="nameofsell" placeholder="Name of selling item" class="form-control"><br>
<div class="form-group">
<label for="sel2">Catagory</label>
<select class="form-control" name="catagory" id="sel2">
<option>Electronics</option>
<option>Cars & Vehicles</option>
<option>Property</option>
<option>Jobs</option>
<option>Work Overseas</option>
<option>Home & garden</option>
<option>Fasion, healthy & beauty</option>
<option> Hobby,Sport & Kids</option>
<option>Business & industry</option>
<option>Services</option>
<option>Education</option>
<option>Animals</option>
<option>Food & Agriculture</option>
<option>Other</option>
</select>
</div><br>
<div class="row">
  <div class="col-lg-6">
    <label>Price(.00)</label><br>
  <input type="text" name="price" placeholder="Price (Rs)" class="form-control"><br>
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
      <textarea name="doi" class="form-control" rows="12" placeholder="Description of Item"></textarea>
      <br>
    </div>
  </div>
  <div class="col-lg-6">

    <input name="fileupload" id="fileupload" type="file"  />
    <hr />
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
