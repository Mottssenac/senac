<?php
session_start();


include_once('connbd.php');

$dados = ConsultaDadosId($_SESSION['id_alterar']);

print_r($dados);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de dados</title>
    <!-- link de vínculo do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Alteração de dadps</h2>
        <p>Altere suas informações</p>
        <form action="dados.php" method="post">
            <!-- Criação da primeira linha -->
            <div class="row">
                <!-- criação da primeira coluna ocupando todo o espaço = 12 -->
                <div class="col-md-12">
                    <input type="text" class="form-control" name="nome" id="" value=<?php echo $dados[0]['nome']?> placeholder="Nome">
                </div>
            </div>
            <!-- segunda linha -->
            <div class="row mt-2">
                <!-- primeira coluna da segunda linha -->
                <div class="col-md-5">
                    <input type="text" class="form-control" name="end" id=""value=<?php echo $dados[0]['end']?> placeholder="Endereço">
                </div>
                <!-- segunda coluna da segunda linha -->
                <div class="col-md-2">
                    <input type="number" class="form-control" name="num" id=""value=<?php echo $dados[0]['num']?> placeholder="Número">
                </div>
                <!-- terceira coluna .... -->
                <div class="col-md-3">
                    <input type="text" class="form-control" name="bairro" id=""value=<?php echo $dados[0]['bairro']?> placeholder="Bairro">
                </div>
                <!-- quarta coluna... -->
                <div class="col-md-2">
                    <input type="text" class="form-control" name="cidade" id=""value=<?php echo $dados[0]['cidade']?> placeholder="Cidade">
                </div>
            </div>
            <!-- terceira linha -->
            <div class="row mt-2">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="cep" id=""value=<?php echo $dados[0]['cep']?> placeholder="CEP">
                </div>
                <div class="col-md-6">
                    <select name="estado" id="" class="form-select">
                        <option value="">Selecione o estado</option>
                        <option value="sp"<?php echo $dados[0]['estado'] == 'sp' ? 'selected' : '' ?>>SP</option>
                        <option value="rj"<?php echo $dados[0]['estado'] == 'rj' ? 'selected' : '' ?>>RJ</option>
                        <option value="mg"<?php echo $dados[0]['estado'] == 'mg' ? 'selected' : '' ?>>MG</option>
                    </select>
                </div>
            </div>
            <!-- quarta linha -->
             <div class="row mt-2"> 
                <div class="col-md-4">
                    <input type="date" class="form-control" name="datanasc" id=""value=<?php echo $dados[0]['datanasc']?>>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="rg" id=""value=<?php echo $dados[0]['rg']?> placeholder="Digite o RG">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="cpf" id=""value=<?php echo $dados[0]['cpf']?> placeholder="Digite o CPF">
                </div>
             </div>
            <!-- quinta linha -->
             <div class="row mt-2">
                <div class="col-md-8">
                    <input type="email" class="form-control" name="email" id=""value=<?php echo $dados[0]['email']?> placeholder="Digite o e-mail">
                </div>
                <div class="col-md-4">
                    <input type="tel" class="form-control" name="tel" id=""value=<?php echo $dados[0]['tel']?> placeholder="Digite o telefone">
                </div>
             </div>
            <!-- sexta linha -->
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