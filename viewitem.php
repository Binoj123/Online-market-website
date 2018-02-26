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
    <div class="container-fluid left-side"></div>
    </div>
    <div class="col-lg-9 col-md-9 all">
    <input type="text" id="myInput" class="form-control" placeholder="What are you looking for buy?">
    <ul class="list-group" id="myList">
    <li class="list-group-item">
      <div class="description">
      <a href="#"><h2>This is Title</h2></a>  
      number of days <br><br>
      <button type="button" class="viewmore">View More</button>
      
      </div>
    
    <img src="images/user2.jpg" alt="item-photo" class="itemimage">  
    </li>
    <li class="list-group-item">Second item</li>
    <li class="list-group-item">Third item</li>
    <li class="list-group-item">Fourth</li>
  </ul>  
    </div>
    </div>
  

</div>
<div class="container">


</div>
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