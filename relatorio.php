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
            <a href="registro.php" class="fw-bold fs-4 text-light"><i class="fa-solid fa-sack-dollar"></i> Registrar</a>
            <a href="estoque.php" class="fw-bold fs-4 text-light"><i class="fa-solid fa-arrow-trend-up"></i> Estoque</a>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row espaco">
                <input class="col-auto btn btn-light mx-auto mt-2" id="formGroupExampleInput4" type="date">
                <input class="col-auto btn btn-light mx-auto mt-2" type="date">
            </div>

            <table class="table text-light espaco1">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Qnt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center espaco1">
                <div class="row">
                    <label for="formGroupExampleInput5" class="form-label text-center fw-bold">Valor Final :</label>
                    <input type="number" class="btn btn-light mx-auto" id="formGroupExampleInput5" style="width: 100px;" readonly>
                </div>
            </div>

        </div>

    </main>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>