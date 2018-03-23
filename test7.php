<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>time and date</title>
  </head>
  <body>
    <?php


//   $to_time = strtotime("2008-12-13 10:42:00");
// $from_time = strtotime("2008-12-13 10:21:00");
// echo round(abs($to_time - $from_time) /3600, 2). " hours ago";

date_default_timezone_set("Asia/Colombo");
$start_date = new DateTime();
 echo $start_date->format('Y-m-d H:i:s');
  $date = date('Y-m-d H:i:s');
 // var $dated = $date;
 // $date2 = date();
// $since_start = $date->$date2;
 // echo "</br>" .$date;
 // $diff=date_diff($date,$date2);
$since_start = $start_date->diff(new DateTime($date));
echo "</br>" .$since_start->days.' days total<br>';
if ($since_start->y>0) {
  echo $since_start->y.' years ago<br>';
}else {
      if ($since_start->m>0) {
      echo $since_start->m.' months<br>';
      }else{
          if ($since_start->d>0) {
          echo $since_start->d.' days<br>';
          }else {
            if ($since_start->h>0) {
              echo $since_start->h.' hours<br>';
            }else {
              echo $since_start->i.' minutes<br>';
            }

  }
  }
}
  ?>

  </body>
</html>
