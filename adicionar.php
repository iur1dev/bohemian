<?php
header('Content-Type: application/json');
include("conn.php");

$categ = $_POST['categ'];
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$qnt = $_POST['qnt'];
$result = '';

$sql_insert = "INSERT INTO produtos(categoria_id,nome,preco,qnt) 
    VALUE ('$categ','$nome','$valor','$qnt')";

if (mysqli_query($conn, $sql_insert)) {
    echo json_encode('');
} else {
    echo json_encode("404" . mysqli_error($conn));
}
