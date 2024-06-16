<?php 
    include "connection/sql_connection.php";

    $card_id = $_GET["id"];
    $query = "DELETE FROM card WHERE card_id = '$card_id'";
    $conn -> query($query);
    echo "<script>window.location.href = './card.php'</script>"
?>