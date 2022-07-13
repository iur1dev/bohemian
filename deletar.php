<?php
header('Content-Type: application/json');
include("conn.php");

$id = $_POST['id'];

$sql_deletar = "DELETE FROM produtos WHERE produtos_id = '$id'";

if (mysqli_query($conn, $sql_deletar)) {
    echo json_encode("deletado");
} else {
    echo json_encode("404" . mysqli_error($conn));
}
