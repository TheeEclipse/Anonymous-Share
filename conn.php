<?php
//here you add your database conneciton code with format below
  $conn=mysqli_connect("localhost","username","password","database name") ;
  if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
