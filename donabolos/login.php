<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dona Bolos - Login</title>
    
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
        
        
        .blur-overlay {
            backdrop-filter: blur(10px); 
            background-color: rgba(138, 96, 19, 0.66);
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

       
        .input-field {
            @apply w-full p-3 text-lg text-white bg-transparent border-2 border-input-border rounded-xl placeholder-white focus:outline-none focus:ring-2 focus:ring-text-primary transition duration-200;
        }
    </style>
</head>
<body>
    <div class="blur-overlay">
        
        
        <div class="w-full max-w-lg text-center p-8 bg-transparent">
            
            <h1 class="text-6xl font-normal text-white tracking-widest mb-2">
                LOGIN
            </h1>
            <p class="text-lg text-background-primary mb-12 uppercase opacity-80">
                Acesse sua conta Dona Bolos
            </p>

            
            <?php
              
            ?>
            
            <form action="processa_login.php" method="POST" class="flex flex-col gap-6">

                <input type="email" id="email" name="email" placeholder="EMAIL.." class="input-field" required>
                <input type="password" id="senha" name="senha" placeholder="SENHA.." class="input-field" required>

              
                <div class="mt-4">
                    <button type="submit" class="w-full py-4 rounded-xl text-xl font-bold text-background-primary bg-button-bg shadow-lg transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-2xl">
                        ENTRAR
                    </button>
                </div>

            </form>
            
           
            <p class="mt-12 text-white opacity-80 text-sm">
                Ainda não tem conta? <a href="cadastro.php" class="underline hover:text-background-primary">Cadastre-se aqui.</a>
            </p>

        </div>
    </div>
</body>
</html>
