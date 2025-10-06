<?php
 
    if (session_status() === PHP_SESSION_NONE) { session_start(); }

   
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: reserva.php");
        exit;
    }

    
    $userId = $_SESSION['user_id'];

    
    $tipoBolo = $_POST['tipo_bolo'] ?? '';
    $dataEntrega = $_POST['data_entrega'] ?? '';
    $exigencias = $_POST['exigencias'] ?? '';

    $erros = [];

    if (empty($tipoBolo) || ($tipoBolo !== '1kg' && $tipoBolo !== '2kg')) {
        $erros[] = "Tipo de bolo inválido. Escolha 1KG ou 2KG.";
    }

    //pra ver se ta no futuro a data
    $dataAtual = new DateTime();
    try {
        $dataPedido = new DateTime($dataEntrega);
        if ($dataPedido < $dataAtual) {
            $erros[] = "A data de entrega deve ser futura.";
        }
    } catch (Exception $e) {
        $erros[] = "Data de entrega inválida.";
    }

    
    if (strlen($exigencias) > 500) {
        $erros[] = "As exigências não podem exceder 500 caracteres.";
    }

  
    if (!empty($erros)) {
        $_SESSION['error'] = implode("<br>", $erros);
        header("Location: reserva.php");
        exit;
    }

    // Conexão com o Banco de Dados (Configuração PDO)
    $host = 'localhost'; 
    $db = 'dona_bolos_db';
    $user = 'root'; 
    $pass = 'sua_senha_aqui'; 
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        $_SESSION['error'] = "Erro interno ao conectar ao banco de dados.";
        header("Location: reserva.php");
        exit;
    }

    // Inserção no Banco de Dados
    
    $sql = "INSERT INTO reservas (user_id, tipo_bolo, data_entrega, exigencias, data_reserva) VALUES (?, ?, ?, ?, NOW())";

    try {
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([$userId, $tipoBolo, $dataPedido->format('Y-m-d'), $exigencias]);

        $_SESSION['success'] = "Sua reserva foi enviada com sucesso! Aguarde a confirmação.";
        header("Location: dashboard.php");
        exit;

    } catch (\PDOException $e) {
        $_SESSION['error'] = "Não foi possível completar a reserva. Tente novamente.";
        header("Location: reserva.php");
        exit;
    }
?>
