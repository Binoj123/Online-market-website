<?php require_once('inc/connection.php') ?>
<?php
// print_r($_POST);

$uname = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['district'];
$city = $_POST['city'];
$nameofsell = $_POST['nameofsell'];
$catagory = $_POST['catagory'];
$price = $_POST['price'];
$conditionofitem =$_POST['conditionofitem'];
$doi =$_POST['doi'];

//date and time
date_default_timezone_set("Asia/Colombo");
$start_date = new DateTime();
 echo $start_date->format('Y-m-d H:i:s');

$target_dir = "photos/";
$target_path = $target_dir . basename( $_FILES['fileupload']['name']);
move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path);


$query = "INSERT INTO sell_item(uname,email,phone,location,city,nameofsell,catagory,price,conditionofitem,doi,`path`,`date`)VALUES('{$uname}','{$email}',{$phone},'{$location}','{$city}','{$nameofsell}','{$catagory}',{$price},'{$conditionofitem}','{$doi}','$target_path',now())";

$result = mysqli_query($connction,$query);
if ($result) {
  // echo "1 record added";
    if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_path)) {
      // echo "succesfullty added";
    }else {
        // echo "<br> Error: " . $query."<br>". $connction->error;
    }
}else {
  // echo "database query failed.";
}



  $connction->close();



// }

 ?>
 <!DOCTYPE html>
 <html>
 <title>Thak you for add item in to our page</title>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="iq.css">
     <link rel="stylesheet" type='text/css' href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   </head>
   <body>


     <!-- Modal -->
     <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title" id="memberModalLabel">Thank you for signing in!</h4>
           </div>
           <div class="modal-body">
             <p>However the account provided is not known.<BR>
             If you just got invited to the group, please wait for a day to have the database synchronized.</p>

             <p>You will now be shown the Demo site.</p>
           </div>
           <div class="modal-footer">
             <input type="button" class="btn btn-info" value="Home page" onclick=" relocate_home()">
        <!--     <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> -->
           </div>
         </div>
       </div>
     </div>

     <script type="text/javascript">
     $(document).ready(function () {

      $('#memberModal').modal('show');

  });
  function relocate_home()
{
     location.href = "../index.php";
}
   </script>

   </body>
 </html>
