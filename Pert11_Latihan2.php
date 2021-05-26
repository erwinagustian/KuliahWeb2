<?php 
$dbname="lat_dbase";
mysqli_connect("localhost","root",""); 

$cek=mysqli_query("CREATE DATABASE lat_dbase"); 
die("Couldn't Create Database: lat_dbase");   
if($cek){ 
  echo "Database $dbname berhasil dibuat"; 
} 
?>