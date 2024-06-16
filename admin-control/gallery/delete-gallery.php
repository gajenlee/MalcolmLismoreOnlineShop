<?php 
include "../../connection/sql_connection.php";

$gallery_id =  $_GET['id'];
$delete_query_gallery = "DELETE FROM gallery WHERE gallery_id='$gallery_id'";
if ($conn -> query($delete_query_gallery) == true) echo "<script>window.location.href='./show-gallery.php'</script>";
?>