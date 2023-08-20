<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svc_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

mysqli_set_charset($conn, 'utf8');


/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svc_shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "connect error";
    exit();
}

mysqli_set_charset($conn, 'utf8');
*/
?>
