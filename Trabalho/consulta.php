<?php
//print_r($_POST);

/* CONEXÃO COM O BANCO DE DADOS */
 $pdo = new PDO('mysql:host=localhost;dbname=bdaula','root','');

/* PREPARAÇÃO PARA A CONSULTA DO BANCO DE DADOS */
$sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");

/* EXECUTA O COMANDO SQL NO BANCO DE DADOS */
$sql->execute(array($_POST['email'], sha1($_POST['senha'])));

/* ORGANIZA OS DADOS RECEBIDO DOS BANCO DE DADOS */
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

//print_r($dados);
if (empty($dados)) {
    session_start();
    $_SESSION['login'] = "<div class='alert alert-primary mt-2' role='alert'>
                            Usuário ou senha incorreto!!
                        </div>";
    header('location:login.php');
} else {
    session_start();
    $_SESSION['usuario'] = $dados['email'];
    $_SESSION['nome'] = $dados['nome'];
    header('location:adm.php');
}



?>