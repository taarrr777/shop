<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "shopping";

$connect = mysqli_connect($host, $username, $password, $db_name);

if(!$connect){
    header("Location: 404.php");
}


?>