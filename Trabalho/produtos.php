<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <!-- link de vínculo do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Reservar</h2>
        <p>Preencha todas as informações corretamente:</p>
        <form action="dadosprodutos.php" method="post">
            <!-- Criação da primeira linha -->
            <div class="row">
                <!-- criação da primeira coluna ocupando todo o espaço = 12 -->
                <div class="col-md-12">
                      <select name="bolo1" id="" class="form-select">
                        <option value="">Tipos de Bolos 1kg</option>
                        <option value="fn">Floresta Negra  R$ 80,00</option>
                        <option value="ma">Morango do amor  R$ 95,00</option>
                        <option value="n">Ninho  R$ 99,99 </option>
                        <option value="p">Pistache  R$ 110,00</option>
                        <option value="c">Chocolate  R$ 75,00</option>
                    </select>
                </div>
                <div class="col-md-12">
                     <select name="bolo2" id="" class="form-select">
                        <option value="">Tipos de Bolos 2kg</option>
                        <option value="fn">Floresta Negra  R$ 150,00</option>
                        <option value="ma">Morango do amor  R$ 170,00</option>
                        <option value="n">Ninho  R$ 185,00 </option>
                        <option value="p">Pistache  R$ 210,00</option>
                        <option value="c">Chocolate  R$ 140,00</option>
                    </select>
                </div>
              
                <div class="col-md-12">
                    <input type="text" class="form-control" name="ex" id="" placeholder="Exigências">
                </div>
                <input type="submit" value="Cadastrar produto">
                
            <?php
            ?>
               
            </div>