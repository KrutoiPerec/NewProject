<?php
  $connection = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'Movie');
  if(!$connection){
    $connection = mysqli_connect( $host = 'localhost', $user = 'root', $password = 'A1i2s3u4l5', $database = 'Movie');
    if(!$connection){
     die("error");
  }
}
  
?>