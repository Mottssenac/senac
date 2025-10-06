<?php
    
    
    // Simulação do nome do usuário 
    $userName = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : 'Cliente';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dona Bólos - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'background-primary': '#F5E9C9', 
                        'text-primary': '#6A4E3A',
                        'button-bg': '#333333',
                        'input-border': '#8B6E5B', 
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
           
            background-color: #8A6013; 
            background-color: #A98450;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .blur-overlay {
            background-color: #A98450; 
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="blur-overlay">
        
        <div class="w-full max-w-sm sm:max-w-md md:max-w-lg text-center p-8 bg-transparent">
            
            <h1 class="text-6xl font-normal text-white tracking-widest mb-2">
                <?php echo $userName; ?>
            </h1>
            <p class="text-lg text-background-primary mb-12 uppercase opacity-80">
                Faça seus pedidos!
            </p>

          
            <div class="flex flex-col gap-6">
               
                <a href="reserva.php" class="w-full block py-4 rounded-xl text-xl font-bold text-background-primary bg-button-bg shadow-lg transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-2xl">
                    Reservar
                </a>
                
                
                <a href="pedidos.php" class="w-full block py-4 rounded-xl text-xl font-bold text-background-primary bg-button-bg shadow-lg transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-2xl">
                    Visualizar pedidos
                </a>
            </div>

            <p class="mt-12 text-white opacity-80 text-sm">
                <a href="inicio.php" class="underline hover:text-background-primary">Sair da conta</a>
            </p>

        </div>
    </div>
</body>
</html>