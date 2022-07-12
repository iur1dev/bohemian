<?php
include("conn.php");

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adega Bohemian</title>
    <link rel="shortcut icon" href="logo1.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<style>
    .espaco {
        margin-top: 15vh;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: rgba(0, 0, 0, 0.8);
    }
</style>

<body class="bg-dark text-white">
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="logo1.jpg" class="rounded" alt="" width="80px">
            </a>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row text-center">
                <button class="btn btn-light fw-bold fs-1 col-8 espaco mx-auto" onclick="location.href='registro.php'" ;><i class="fa-solid fa-sack-dollar"></i> Registrar</button>
                <button class="btn btn-light fw-bold fs-1 col-8 espaco mx-auto" onclick="location.href='relatorio.php'" ;><i class="fa-solid fa-copy"></i> Relatórios</button>
                <button class="btn btn-light fw-bold fs-1 col-8 espaco mx-auto" onclick="location.href='estoque.php'" ;><i class="fa-solid fa-arrow-trend-up"></i> Estoque</button>
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>

</html>

