<?php 
include "../../connection/sql_connection.php";

$image_id =  $_GET['id'];
$delete_query_image = "DELETE FROM images WHERE image_id='$image_id'";
if ($conn -> query($delete_query_image) == true) echo "<script>window.location.href='./show-image.php'</script>";
?>