<!-- ( ͡° ͜ʖ ͡°) -->

<?php
include("conn.php");
// select categoria
$sql_categ = "SELECT * FROM categoria;";
$tabela_categ = mysqli_query($conn, $sql_categ);
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <link rel="shortcut icon" href="logo1.jpg" type="image/x-icon">
    <title>Adega Bohemian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="iur1Dev">
    <meta name="description" content="sistema de adega">
    <meta name="keywords" content="adega, bohemian">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery.mask.js"></script>
    <script src="mask.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark" onload="att()">
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="logo1.jpg" class="rounded" alt="logo bohemian" width="80px">
            </a>
            <a href="registro.php" class="fw-bold fs-4 text-light"><i class="fa-solid fa-sack-dollar"></i> Registrar</a>
            <a href="relatorio.php" class="fw-bold fs-4 text-light"><i class="fa-solid fa-copy"></i> Relatórios</a>
        </div>
    </nav>
    <main>
        <div class="container espaco">
            <div class="row mt-5">
                <div class="col-lg-3"></div>
                <input class="btn btn-light col-6 mx-auto col-lg-3" type="text" placeholder="Nome" name="nome" id="nome">
                <input class="btn btn-light money col-3 mx-auto col-lg-1" type="text" placeholder="Valor" name="valor" id="valor">
                <input class="btn btn-light col-2 mx-auto col-lg-1" type="text" placeholder="Qnt" name="qnt" id="qnt">
                <div class="col-lg-3"></div>
                <div class="col-12 col-lg-6 mx-auto">
                    <select class="form-select mt-4" name="categ" id="categ">
                        <option selected></option>
                        <!-- select categoria -->
                        <?php while ($linha1 = mysqli_fetch_assoc($tabela_categ)) { ?>
                            <option value="<?php echo $linha1['id']; ?>"><?php echo $linha1['nome']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-lg-3"></div>
                    <button class="btn btn-primary fw-bold col-3 col-lg-1 mx-auto" onclick="teste()">Cadastrar</button>
                    <button class="btn btn-success fw-bold col-3 col-lg-1 mx-auto" onclick="teste2()">Atualizar</button>
                    <button class="btn btn-danger fw-bold col-3 col-lg-1 mx-auto" onclick="teste3()">Deletar</button>
                    <div class="col-lg-3"></div>
                </div>
                <div id="receba"></div>
            </div>
            <table class="table text-light espaco1">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Qnt</th>
                    </tr>
                </thead>
                <tbody id="att_sel">
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>