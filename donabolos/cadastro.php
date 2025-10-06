<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dona Bólos - Cadastro</title>
   
    <script src="https://cdn.tailwindcss.com"></script>
    
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'background-primary': '#a78c44ff', 
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
        
        
        <div class="w-full max-w-4xl text-center p-8">
            
            <h1 class="text-6xl font-normal text-white tracking-widest mb-2">
                CADASTRO
            </h1>
            <p class="text-lg text-background-primary mb-12 uppercase opacity-80">
                Dona Bólos
            </p>

           
            <form action="processa_cadastro.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6 auto-rows-min">

               
                <div class="flex flex-col space-y-6">
                    <input type="text" id="nome" name="nome" placeholder="NOME.." class="input-field" required>
                    <input type="text" id="endereco" name="endereco" placeholder="ENDEREÇO.." class="input-field" required>
                    <input type="email" id="email" name="email" placeholder="EMAIL.." class="input-field" required>
                    <input type="tel" id="telefone" name="telefone" placeholder="TELEFONE.." class="input-field">
                </div>
                
                <div class="flex flex-col space-y-6">
                    <input type="password" id="senha" name="senha" placeholder="SENHA.." class="input-field" required>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="CONFIRMAR SENHA.." class="input-field" required>
                    
                    
                    <div class="h-12 md:h-14"></div> 
                    <div class="h-12 md:h-14"></div>
                </div>

                
                <div class="md:col-span-2 mt-8">
                    <button type="submit" class="w-1/2 min-w-[200px] py-4 rounded-xl text-xl font-bold text-background-primary bg-button-bg shadow-lg transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-2xl">
                        CADASTRAR
                    </button>
                </div>

            </form>
            
            <p class="mt-12 text-white opacity-80 text-sm">
                Já tem conta? <a href="login.php" class="underline hover:text-background-primary">Faça login aqui.</a>
            </p>

        </div>
    </div>
</body>
</html>