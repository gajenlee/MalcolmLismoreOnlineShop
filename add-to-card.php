<?php 
session_start();
include "connection/sql_connection.php";


$card_id = uniqid();
$item_id = $_POST['id'];
$user_id = $_SESSION['user_id'];
$query_card = "INSERT INTO card (card_id, card_item_id, card_customer_id) VALUES ('$card_id', '$item_id', '$user_id')";

$result = $conn -> query($query_card);


?>