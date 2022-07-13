<?php
header('Content-Type: application/json');
include('conn.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM produtos WHERE produtos_id = '$id'";

    $result = mysqli_query($conn, $sql);
    $dados = $result->fetch_all();

    if (mysqli_num_rows($result) > 0) {
        echo json_encode($dados);
    } else {
        echo json_encode("404" . mysqli_error($conn));
    }
} else {
    $id = 0;
}
