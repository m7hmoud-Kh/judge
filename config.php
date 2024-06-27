<?php
  $DB_SERVER= "localhost";
  $DB_USERNAME= "root";
  $DB_PASSWORD= "";
  $DB_DATABASE="palstine_show";
  $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
  $sSQL= 'SET CHARACTER SET utf8';
  mysqli_query($db,$sSQL);
   if(!$db ){
	   die("Connection Failed".mysqli_connect_error());
   }
?>

