<?php 

include "../../connection/sql_connection.php";

$user_id = $_GET["id"];
$query_user = "DELETE FROM users WHERE user_id='$user_id'";
$conn -> query($query_user);

echo "<script>window.location.href = '../../admin.php'</script>"

?>