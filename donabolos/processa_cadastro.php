<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    $dbHost = 'localhost';
    $dbName = 'dona_bolos_db';
    $dbUser = 'root';
    $dbPass = '';

  
    try {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    
        die("Erro de Conexão com o Banco de Dados: " . $e->getMessage());
    }

    $required_fields = ['nome', 'endereco', 'email', 'senha', 'confirmar_senha'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $_SESSION['error'] = "Por favor, preencha todos os campos obrigatórios.";
            header("Location: cadastro.php");
            exit;
        }
    }

    
    $nome = htmlspecialchars(trim($_POST['nome']));
    $endereco = htmlspecialchars(trim($_POST['endereco']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars(trim($_POST['telefone']));
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "O formato do e-mail é inválido.";
        header("Location: cadastro.php");
        exit;
    }


    if ($senha !== $confirmar_senha) {
        $_SESSION['error'] = "As senhas não coincidem.";
        header("Location: cadastro.php");
        exit;
    }
    

    if (strlen($senha) < 6) {
        $_SESSION['error'] = "A senha deve ter pelo menos 6 caracteres.";
        header("Location: cadastro.php");
        exit;
    }


    $sql_check = "SELECT id FROM usuarios WHERE email = :email LIMIT 1";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->bindParam(':email', $email);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $_SESSION['error'] = "Este e-mail já está cadastrado.";
        header("Location: cadastro.php");
        exit;
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql_insert = "INSERT INTO usuarios (nome, endereco, email, telefone, senha_hash, data_cadastro) 
                   VALUES (:nome, :endereco, :email, :telefone, :senha_hash, NOW())";
    
    $stmt_insert = $pdo->prepare($sql_insert);


    $stmt_insert->bindParam(':nome', $nome);
    $stmt_insert->bindParam(':endereco', $endereco);
    $stmt_insert->bindParam(':email', $email);
    $stmt_insert->bindParam(':telefone', $telefone);
    $stmt_insert->bindParam(':senha_hash', $senha_hash);

    if ($stmt_insert->execute()) {
        
    
        $_SESSION['success'] = "Cadastro realizado com sucesso! Faça login para continuar.";
        header("Location: login.php");
        exit;
        
    } else {
        
   
        $_SESSION['error'] = "Erro ao registrar o usuário. Tente novamente.";
        header("Location: cadastro.php");
        exit;
    }

} else {
    
    header("Location: cadastro.php");
    exit;
}
?>