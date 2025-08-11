<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do produto</title>
    <!-- link de vínculo do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <p>Preencha todas as informações corretamente:</p>
        <form action="dadosprodutos.php" method="post">
            <!-- Criação da primeira linha -->
            <div class="row">
                <!-- criação da primeira coluna ocupando todo o espaço = 12 -->
                <div class="col-md-12">
                    <input type="text" class="form-control" name="nproduto" id="" placeholder="Nome do produto">
                </div>
            </div>
            <!-- segunda linha -->
            <div class="row mt-2">
                <!-- primeira coluna da segunda linha -->
                <div class="col-md-5">
                    <input type="text" class="form-control" name="desproduto" id="" placeholder="Descrição">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="dono" id="" placeholder="Fornecedor">
                </div>
                <!-- segunda coluna da segunda linha -->
                <div class="col-md-2">
                    <input type="number" class="form-control" name="valor" id="" placeholder="Preço">
                </div>
                <!-- botao -->
                <input type="submit" value="Cadastrar produto">
                
            <?php
            header('location:adm.php'); 
            ?>
               
            </div>