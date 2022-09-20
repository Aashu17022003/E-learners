<?php
$server = "localhost";
$username = "id18481156_root";
$password = "B3G\)Kh&r{wAJPIg";
$database = "id18481156_learners";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
   
    die("Error". mysqli_connect_error());
}

?>