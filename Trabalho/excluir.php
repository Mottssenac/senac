<?php

include_once("connbd.php");

$dados = ConsultaDadosUsuarios();
//echo "<pre>";
//print_r($dados);
//echo "</pre>";

?>

<?php
session_start();
print_r($_SESSION);

if (isset($_SESSION['usuario'])) {
    header('location:login.php');
}

?>

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
        <a class="navbar-brand text-light">Exclusão de dados</a>
        <form class="d-flex" role="search">
        <h5 class="text-light"><?php echo $_SESSION['usuario'];?></h5>
        <a class="btn btn-outline-success mx-2 text-light" href="sair.php">Sair</a>

        </form>
    </div>
    </nav>

    <div class="container mt-4">
        <table class="table table-hover">
            <tr>
                <td>Cod</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Email</td>
                <td>Ação</td>
            </tr>
            <?php
                foreach ($dados as $key => $value) {
                    echo "<tr>";
                        echo "<td>". $dados[$key]["id"] ."</td>";
                        echo "<td>". $dados[$key]["nome"] ." </td>";
                        echo "<td>". $dados[$key]["cpf"] ." </td>";
                        echo "<td>". $dados[$key]["rg"] ." </td>";
                        echo "<td>". $dados[$key]["email"] ." </td>";
                        echo "<td> <a class='btn btn-danger' href='connbd.php?id=".$dados[$key]["id"]."&tp=excluir'>Excluir</a> </td>";
                    echo "</tr>";
                }
                
            ?>
    
        </table>
    </div>

<!-- RODAPÉ -->
    <div class="container text-center">
        <div class="fixed-bottom bg-dark py-2 text-light">
            @Motts
        </div>

    </div>

    <!-- link de vínculo do Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>