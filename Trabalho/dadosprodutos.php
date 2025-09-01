<?php
//print_r($_POST);
$dadosvazios = 0;

foreach ($_POST as $key => $value) {
    if ($value == "") {
        $dadosvazios++;
    }
}

if ($dadosvazios > 0) {
    /* Inicia uma sessão do sistema e grava os dados a serem enviados de volta */
    session_start();
    $_SESSION['valida'] = "<div class='alert alert-primary mt-5' role='alert'>
                Campos obrigatórios não preenchidos!!
            </div>";
    /* redireciona para a página de formulário */
    header('location:produtos.php');
} else {
        session_start();
        $_SESSION['valida'] = "<div class='alert alert-primary mt-5' role='alert'>
                Campos cadastrados com sucesso!!
            </div>";
        /* CHAMA A FUNÇÃO PARA GRAVAR AS INFORMAÇÕES NO BANCO DE DADOS */
        CadastrarBanco();

        header('location:produtos.php'); 
}

function CadastrarBanco() {
    /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=bdaula','root','');

    /* PREPARAÇÃO DOS DADOS */
    $sql = $pdo->prepare("INSERT INTO `produtos` 
    VALUES (null,?,?,?,?)");

    /* EXECUÇÃO E GRAVAÇÃO DOS DADOS */
    $sql->execute( array( $_POST['nproduto'],
                          $_POST['desproduto'],
                          $_POST['dono'],
                          $_POST['valor'],
                           
    ) // fecha o array
    ); // fecha o execute
}
?>