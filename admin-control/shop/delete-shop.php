<?php 
include "../../connection/sql_connection.php";

$shop_id =  $_GET['id'];
$delete_query_shop = "DELETE FROM items WHERE item_id='$shop_id'";
if ($conn -> query($delete_query_shop) == true) echo "<script>window.location.href='./show-shop.php'</script>";
?>