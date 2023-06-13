<?php
$servername = "localhost";

$username = "root";

$pass = "";

$database = "checkbox";

$con = mysqli_connect($servername, $username, $pass, $database);
if(!$con){
    die("Error" . mysqli_connect_errno());

} 




?>