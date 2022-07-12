<?php

include("conn.php");

$sql_select = "SELECT * FROM categoria;";
$sql_select_f = mysqli_query($conn, $sql_select);

$sql_select2 = "SELECT * FROM produtos;";
$sql_select2_f = mysqli_query($conn, $sql_select2);

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

    .espaco1 {
        margin-top: 5vh;
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
            <a href="relatorio.php" class="fw-bold fs-4 text-light"><i class="fa-solid fa-copy"></i> Relatórios</a>
            <a href="estoque.php" class="fw-bold fs-4 text-light"><i class="fa-solid fa-arrow-trend-up"></i> Estoque</a>
        </div>
    </nav>

    <main>
        <div class="container espaco">
            <div class="col-lg-6 mx-auto">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <?php while ($linha = mysqli_fetch_assoc($sql_select_f)) { ?>
                    <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="col-md-6 mx-auto">
            <select class="form-select form-select-sm mt-4" aria-label=".form-select-sm example">
                <?php while ($linha2 = mysqli_fetch_assoc($sql_select2_f)) { ?>
                    <option value="<?php echo $linha2['produtos_id']; ?>"><?php echo $linha2['nome']; ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="text-center espaco1">
                <input type="text" class="mt-4 col-4 col-lg-2 text-center" placeholder="Preço" readonly>
                <div class="col-8"></div>
                <input type="number" class="espaco1 col-4 col-lg-2 text-center" placeholder="Qnt" name="qnt" id="qnt">
            </div>
            <div class="text-center espaco1">
                <button class="btn btn-light mt-4 fw-bold">Enviar</button>
            </div>
        </div>

    </main>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>