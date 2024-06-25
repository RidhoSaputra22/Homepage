<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'pass';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ');
   }
   
   
?>