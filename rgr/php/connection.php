<?php
  $connection = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'Movie');
  if(!$connection){
     die("error");
  }
  
?>