
<?php require_once('ums/inc/connection.php') ?>
<?php

  // $record = mysqli_fetch_assoc($result_set);

 if (isset($_GET['catagory'])) {
   $catagory = $_GET['catagory'];
   $query = "SELECT * FROM sell_item WHERE catagory='$catagory'";
  // echo $catagory;
  // echo $catagory;
//   echo '<script type="text/javascript">',
//         'myFunction();',
//      '</script>'
// ;
}else {
  // echo "all";
  // echo "hi";
  $query = "SELECT * FROM sell_item";
}
$result_set = mysqli_query($connction,$query);
  ?>

  <?php
   if (isset($_GET['pricer'])) {
     echo "it works";
     $pricequery = "SELECT * FROM sell_item WHERE price BETWEEN 10 AND 1500";
     $result_set = mysqli_query($connction,$pricequery);

   }


   ?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">


  <title>Choose your items</title>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="vi.css" type="text/css">
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<header>
    <div class="text-center"><img src="images/logo3.png" alt="logo"></div>

</header>


<div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-3">
    <div class="container-fluid left-side">
      <h3 class="text-center">Choose as you whish</h3>
      <p class="text-center"><u>Filter by</u></p><br>
      <div class="container-fluid">
        <label>Location</label><br>
        <select class="form-control" name="district" id="mySelect" onchange="myFunction()">
          <option value="all" selected>All</option>
          <option value="colombo">Colombo</option>
          <option value="gampaha">Gampaha</option>
          <option value="kaluthara">Kaluthara</option>
          <option value="galle">Galle</option>
          <option value="mathara">Matara</option>
          <option value="hambanthota">Hambanthota</option>
          <option value="kegalle">Kegalle</option>
          <option value="rathnapura">Rathnapura</option>
          <option value="badulla">Badulla</option>
          <option value="bandarawela">Bandarawela</option>
          <option value="trinkomalee">Trinkomalee</option>
          <option value="batticaloa">Batticaloa</option>
          <option value="ampara">Ampara</option>
          <option value="kandy">Kandy</option>
          <option value="nuwara eliya">Nuwara Eliya</option>
          <option value="matale">Matale</option>
          <option value="puththalama">Puththalama</option>
          <option value="kurunegala">Kurunegala</option>
          <option value="anuradhapura">Anuradhapura</option>
          <option value="polonnaruwa">Polonnaruwa</option>
          <option value="mannar">Mannar</option>
          <option value="vavniya">Vavniya</option>
          <option value="mullative">Mullative</option>
          <option value="kilinochchi">Kilinochchi</option>
          <option value="jaffna">Jaffna</option>
        </select><br>
        <input type="button" value="Go" class="btn btn-secondary" onClick="window.location.reload()">
        <input type="submit" value="price go" class="btn btn-secondary" name="pricer">
      </div>

<!-- <div class="container-fluid price_slider">
  <br>
  <label for="price-min">Price:</label>
  <div class="row">
    <div class="col-md-6">
<input type="text" id="myMin" class="form-control" name="min"  placeholder="min">
    </div>
    <div class="col-md-6">
<input type="text" id="myMax" name="max" class="form-control"  placeholder="max">
    </div>
  </div>
  <br>
    <input type="button" value="Go" class="btn btn-secondary" onClick="window.location.reload()">
  <p></p>
</div> -->
    </div>
    </div>
    <div class="col-lg-9 col-md-9 all">
      <input type="text" id="myInput" class="form-control" placeholder="What are you looking for buy?"><br>
      <ul class="list-group" id="myList">

        <?php
            $rows= $result_set->num_rows;
         for($i=1;$i<=$rows;$i++){
           $row=$result_set->fetch_array(MYSQLI_ASSOC);
           $result_set->data_seek($i);
           $nameofsell=$row['nameofsell'];
           $path="ums/".$row['path'];
           $price=$row['price'];
           $location=$row['location'];
           $date=$row['date'];
           $dbcatagory=$row['catagory'];
           // echo $date;
           date_default_timezone_set("Asia/Colombo");
           $start_date = new DateTime();
           $since_start = $start_date->diff(new DateTime($date));

           // echo "</br>" .$since_start->days.' days total<br>';
           // echo $path;
           $id=$row['id'];

        echo<<<_END



        <li class="list-group-item">
        <div class="container-fluid">
        <div class="row">
        <div class=col-md-3>
        <img src="$path" alt="item-photo" class="itemimage" style="height:120px;">
        </div>
        <div class=col-md-9>
        <h2 style="color:rgb(255, 131, 1);">$nameofsell</h2>

        <div class="row">
        <div class=col-md-9>

          <div class="description">

          <div style="color:rgb(83, 83, 83); font-size:12px;">
_END;
if ($since_start->y>0) {
  echo $since_start->y.' years';
}else {
      if ($since_start->m>0) {
      echo $since_start->m.' months';
      }else{
          if ($since_start->d>0) {
          echo $since_start->d.' days';
          }else {
            if ($since_start->h>0) {
              echo $since_start->h.' hours';
            }else {
              echo $since_start->i.' minutes';
            }

  }
  }
}




echo<<<_END
           ago<br></div>
          <div style="color:rgb(0, 177, 97);">From $location</div>
            <h5 style="margin-top:5px; color:rgb(0, 155, 254);" >Rs. $price.00</h5>

           </div>
        </div>
        <div col-md-3>
        <form action="single.php" method="post">
        <button type="submit" class="btn btn-primary viewmore">View More</button>
        <input type="hidden" value="$id" name="id">
        </form>
          <p style="color:white; font-size:1px;">$dbcatagory</p>
        </div>
        </div>
        </div>
        </div>
        </div>


      </li>

_END;
 }
         ?>

        </ul>
      </div>
    </div>
  </div>




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
  <p class="text-center">Copyrigth @ 2018 by Patas.lk. All rigth reserved.</p>
</div>
</div>
  </footer>


<script>

$(document).ready(function(){
// function inputer(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    var value_of_dropdown  = $(this).find('select[id="#mySelect"]').val();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
// }

  // function combo(){
    var x = document.getElementById("mySelect").value;
    $("#myList li").filter(function() {
      if (x=="all") {

      }else {
        $(this).toggle($(this).text().toLowerCase().indexOf(x) > -1)
      }
    });

  // }
  var min = parseFloat(document.getElementById("myMin").value);
  var max = parseFloat(document.getElementById("myMax").value);

  var myJSON = '{"price":75}';
  var myObj = JSON.parse(myJSON);
  // document.getElementById("demo").innerHTML = myObj.name;

  var rprice = "<?php echo $price; ?>";

if (min<=rprice && max>=rprice) {

  $("#myList li").filter(function() {
    $(this).toggle($(this).indexOf(rprice) > -1)
  });

}


});

$( window ).load(function() {
  // function myFunction() {
     document.write("function works");
    var y = "?php echo $catagory; ?>";
    document.write(y);
    if (y!="all") {
      $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(y) > -1)

       });
    }
  // }
});
// document.getElementById("#myList li").addEventListener("load", myFunction);
//






</script>

</body>
</html>
