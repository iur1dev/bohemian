<?php
header('Content-Type: application/json');
include("conn.php");

$id = $_POST['id'];
$categ = $_POST['categ'];
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$qnt = $_POST['qnt'];

$sql_update = "UPDATE produtos SET 
categoria_id = '$categ',
nome = '$nome',
preco = '$valor',
qnt = '$qnt'
WHERE produtos_id = '$id'";

if (mysqli_query($conn, $sql_update)) {
    echo json_encode("atualizado");
} else {
    echo json_encode("erro" . mysqli_error($conn));
}
