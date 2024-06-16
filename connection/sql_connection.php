<?php

$servername =  "localhost";
$username = "root";
$password = "";
$database = "malcolm_shop";

// database connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
    echo $conn->connect_error;
}

?>