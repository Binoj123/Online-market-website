
<?php require_once('ums/select-query.php') ?>
<?php
$query = "SELECT * FROM sell_item";

$result_set = mysqli_query($connction,$query);

 $record = mysqli_fetch_assoc($result_set);


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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
      <label>Location</label><br>
      <select class="form-control" name="district" id="sel1">
        <option selected>All</option>
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
    </div>
    <div class="col-lg-9 col-md-9 all">
      <input type="text" id="myInput" class="form-control" placeholder="What are you looking for buy?"><br>
      <ul class="list-group" id="myList">

        <?php
            $rows= $result_set->num_rows;
         for($i=0;$i<=$rows;$i++){

           $row=$result_set->fetch_array(MYSQLI_ASSOC);
           $result_set->data_seek($i);
           $nameofsell=$row['nameofsell'];
           $path=$row['path'];
           $price=$row['price'];
           $location=$row['location'];
           $date=$row['date'];
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
  <p class="text-center">Copyrigth @ 2018 by Binoj.All rigth reserved.</p>
</div>
</div>
  </footer>


<script>
$(document).ready(function(){

  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


</script>

</body>
</html>
