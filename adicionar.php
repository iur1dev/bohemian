<?php
header('Content-Type: application/json');
include("conn.php");

if (!empty($_POST['categ'] && $_POST['nome'] && $_POST['valor'] && $_POST['qnt'])) {

    $categ = $_POST['categ'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $qnt = $_POST['qnt'];

    $sql_insert = "INSERT INTO produtos(categoria_id,nome,preco,qnt) 
    VALUE ('$categ','$nome','$valor','$qnt')";

    if (mysqli_query($conn, $sql_insert)) {
        echo json_encode('cadastrado');
    } else {
        echo json_encode("404" . mysqli_error($conn));
    }
} else {
    echo json_encode("Preencha todos os campos!!!");
}
