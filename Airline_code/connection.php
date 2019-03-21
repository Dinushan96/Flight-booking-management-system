<?php

$servname = "localhost";
$username = "root";
$paswd = "";
$dbname = "air line";

$con = mysqli_connect($servname, $username, $paswd, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>