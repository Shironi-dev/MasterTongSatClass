<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "car";
$conn = mysqli_connect($serverName , $userName , $password , $dbname);
if(!$conn) {
    die("connection failed : ".mysqli_connect_error);
}
?>