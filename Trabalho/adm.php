<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
    <!-- link de vínculo do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <!-- CABEÇALHO -->
    <nav class="navbar bg-dark">
    <div class="container-fluid">
        <img src="../img/logo.png" height="50px" alt="">
        <a class="navbar-brand text-light">Área de administração</a>
        <form class="d-flex" role="search">
        <h5 class="text-light"><?php echo $_SESSION['nome'];?></h5>
        <a class ="btn btn-outline-success mx-2 text-light" href="sair.php">SAIR</a>
        </form>
    </div>
    </nav>
    <div class="container mt-5">
        <h5>Opções do CRUD</h5>
        <a href="produtos.php" class="btn btn-primary">Cadastrar produtos</a>
        <a href="consultadados" class="btn btn-primary">Consulta</a>
        <a href="" class="btn btn-primary">Exclusão</a>
        <a href="update.php" class="btn btn-primary">Alteração</a>

    </div>


<!-- RODAPÉ -->
    <div class="container text-center">
        <div class="fixed-bottom bg-dark py-2 text-light">
            @Motts - 2025
        </div>

    </div>

    <!-- link de vínculo do Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>