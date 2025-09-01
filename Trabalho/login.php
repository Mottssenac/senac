<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link de vínculo do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="consulta.php" method="post">
                    <input class="form-control mt-1 mb-2" type="email" name="email" id="" placeholder="Digite seu e-mail" required>
                    <input class="form-control mt-1 mb-2" type="password" name="senha" placeholder="Digite sua senha" id="" required>
                    <input class="btn btn-lg btn-success"type="submit" value="Entrar">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        
        <?php
            if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                $_SESSION['login'] = null;
            }
        
        ?>

    </div>
    <!-- link de vínculo do Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>