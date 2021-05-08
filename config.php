<?php 

$server="localhost";
$username="root";
$password="";
$db="bankdata";

$conn=mysqli_connect($server,$username,$password,$db,"3306");

if($conn){
  
}

else
die("connection raunit to this database failed due to " .mysqli_connect_error());


?>
