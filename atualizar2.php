<?php
header('Content-Type: application/json');
include('conn.php');

$sql = "SELECT produtos_id, categoria_id, nome, REPLACE(preco, '.', ','), qnt FROM produtos";
$tabela = mysqli_query($conn, $sql);
$dados = mysqli_fetch_all($tabela);

if (mysqli_num_rows($tabela) > 0) {
    echo json_encode($dados);
} else {
    echo json_encode("404" . mysqli_error($conn));
}
