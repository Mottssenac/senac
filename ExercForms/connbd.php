<?php

if (!empty($_GET['id']) and $_GET['tp'] == 'excluir') {
    ExcluirUsuario($_GET['id']);
}elseif (!empty($_GET['id']) and $_GET['tp'] == 'alterar'){
    CarregarAlteracao($_GET['id']);
}

function ConectaBD() {
    $pdo = new PDO('mysql:host=localhost;dbname=bdaula','root','');
    return $pdo; 
}


function ConsultaDadosUsuarios() {
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `usuarios`");
    $sql->execute(array());
    $dadousuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dadousuarios;
}

function ConsultaDadosId($id){
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE id=?");
    $sql->execute(array());
    $dadousuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $dadousuarios;
}

function ExcluirUsuario($id) {
    $pdo = ConectaBD();
    $sql = $pdo->prepare("DELETE FROM `usuarios` WHERE id=?");
    $sql->execute(array($id));
    
    echo "Usuário excluído";
    header("location:excluir.php");
}

function CarregarAlteracao($id){
    session_start();
    $_SESSION['id_alterar'] = $id;

    header('location:formupdate.php')
}

?>