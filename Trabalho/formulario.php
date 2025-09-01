<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <!-- link de vínculo do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <p>Preencha todas as informações corretamente:</p>
        <form action="dados.php" method="post">
            <!-- Criação da primeira linha -->
            <div class="row">
                <!-- criação da primeira coluna ocupando todo o espaço = 12 -->
                <div class="col-md-12">
                    <input type="text" class="form-control" name="nome" id="" placeholder="Nome">
                </div>
            </div>
            <!-- segunda linha -->
            <div class="row mt-2">
                <!-- primeira coluna da segunda linha -->
                <div class="col-md-5">
                    <input type="text" class="form-control" name="end" id="" placeholder="Endereço">
                </div>
                <div class="col-md-6">
                    <select name="bairro" id="" class="form-select">
                        <option value="">Selecione o bairro disponível</option>
                        <option value="ge">Geisel</option>
                        <option value="md">Mary Dota</option>
                        <option value="vf">Vila Falcão</option>
                        <option value="vsp">Vila São paulo</option>
                        <option value="c">Centro</option>
                    </select>
                </div>
            </div>
            <!-- quinta linha -->
             <div class="row mt-2">
                <div class="col-md-8">
                    <input type="email" class="form-control" name="email" id="" placeholder="Digite o e-mail">
                </div>
                <div class="col-md-4">
                    <input type="tel" class="form-control" name="tel" id="" placeholder="Digite o telefone">
                </div>
             </div>
            <!-- sexta linha -->
            <div class="row mt-2">
                <div class="col-md-6">
                    <input type="password" class="form-control" name="senha" id="" placeholder="Digite a senha">
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="confsenha" id="" placeholder="Confirme a senha">
                </div>
            </div>
            <!-- sétima linha -->
            <div class="row mt-3 text-center">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-lg" value="Cadastrar">
                </div>
            </div>
          
        </form>
        <?php
            if (isset($_SESSION['valida'])) {
                echo $_SESSION['valida'];
                $_SESSION['valida'] = null;
            }
        
        ?>
    </div>
    <!-- link de vínculo do Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>