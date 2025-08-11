<?php

$pdo

function ConectaBD(){
    $pdo = new PDO('mysql:host=localhost;dbname=bdaula','root','');
    return $pdo
}

function ConsultaDadosUsuarios(){
    $pdo = ConectaBD();
    $sql = $pdo->prepare("SELECT*FROM 'usuarios'");
    $sql ->execute(array());
    $dadosusuarios = $sql ->fetchALL(PDO::FETCH_ASSOC);

return $dadosusuarios;
}
?>