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
    header('location:formulario.php');
} else {
    if (sha1($_POST['senha']) == sha1($_POST['confsenha'])) {
        session_start();
        $_SESSION['valida'] = "<div class='alert alert-primary mt-5' role='alert'>
                Campos cadastrados com sucesso!!
            </div>";
        /* CHAMA A FUNÇÃO PARA GRAVAR AS INFORMAÇÕES NO BANCO DE DADOS */
        CadastrarBanco();

        header('location:formulario.php'); 
    } else {
        session_start();
        $_SESSION['valida'] = "<div class='alert alert-primary mt-5' role='alert'>
                Senhas digitadas não conferem!!
            </div>";
        header('location:formulario.php'); 
    }
}

function CadastrarBanco() {
    /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=bdaula','root','');

    /* PREPARAÇÃO DOS DADOS */
    $sql = $pdo->prepare("INSERT INTO `usuarios` 
    VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    /* EXECUÇÃO E GRAVAÇÃO DOS DADOS */
    $sql->execute( array( $_POST['nome'],
                          $_POST['end'],
                          $_POST['num'],
                          $_POST['bairro'],
                          $_POST['cidade'],
                          $_POST['cep'],
                          $_POST['estado'],
                          $_POST['datanasc'],
                          $_POST['rg'],
                          $_POST['cpf'],
                          $_POST['email'],
                          $_POST['tel'],
                          sha1($_POST['senha']),
                          date("d-m-Y H:i:s")  

    ) // fecha o array
    ); // fecha o execute
}

?>