<?php
session_start();
if (!empty($_GET('tp'))) {
    if (!empty($_GET['id']) and $_GET['tp'] == 'excluir') {
        ExcluirUsuario($_GET['id']);
    
    }elseif (!empty($_GET['id']) and $_GET['tp'] == 'alterar'){
        CarregarAlteracao($_GET['id']);
    
    }elseif ($_GET['tp'] == 'concluiralteracao' and !empty($_SESSION['id_alterar'])){
        UpdateDados($_SESSION['id_alterar'], $_POST)
    }
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
    $_SESSION['id_alterar'] = $id;

    header('location:formupdate.php')
}

function UpdateDados($id, $dados){
    $pdo = ConectaBD();
    $sql = $pdo->prepare("UPDATE `usuarios` SET
                                                nome=?,
                                                end=?,
                                                num=?,
                                                bairro=?,
                                                cidade=?,
                                                cep=?,
                                                estado=?,
                                                datanasc=?,
                                                rg=?,
                                                cpf=?,
                                                email=?,
                                                tel=?
                                                        WHERE id=?");
    $sql->execute(array($dados['nome'],
                        $dados['end'],
                        $dados['num'],
                        $dados['bairro'],
                        $dados['cidade'],
                        $dados['cep'],
                        $dados['estado'],
                        $dados['datanasc'],
                        $dados['rg'],
                        $dados['cpf'],
                        $dados['email'],
                        $dados['tel'],
                        $id));
    $_SESSION['id_alterar'] = '';
    $_SESSION['valida'] = "<div class='alert alert-primary mt-5' role='alert'>
            Dados alterados com sucesso! </div>";
            header("location:update.php");
}
?>