<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dona Bólos - Mainpage</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
  
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        
                        'background-primary': '#F5E9C9',
                        
                        'text-primary': '#6A4E3A',
                        
                        'button-bg': '#8B6E5B',
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
            
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }

       
        .hero-text {
            line-height: 1.1; 
            max-width: 600px; 
        }
    </style>
</head>
<body class="bg-background-primary flex flex-col p-4 sm:p-8">

    
    <header class="w-full mb-12">
      
        <div class="text-center sm:text-left">
            <img 
                src="donabolos.png" 
                alt="Logotipo Dona Bolos - Doces exclusivos" 
                class="h-28 w-auto inline-block rounded-full border border-text-primary shadow-lg"
                onerror="this.onerror=null; this.src='" 
            >
        </div>
    </header>

    
    <main class="flex-grow flex flex-col justify-center items-start pl-0 sm:pl-16">
        
    
        <h1 class="hero-text text-4xl sm:text-6xl font-normal text-text-primary mb-10 tracking-tight">
            APRECIE O MELHOR DA CONFEITARIA PARA O SEU BÓLO!
        </h1>

        <div class="flex flex-col space-y-4">
            
            <a href="cadastro.php" 
               class="flex items-center justify-center w-60 py-4 px-6 rounded-xl text-lg font-semibold text-white bg-button-bg shadow-md transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-lg">
                CADASTRAR
            </a>
            
            <a href="login.php" 
               class="flex items-center justify-center w-60 py-4 px-6 rounded-xl text-lg font-semibold text-white bg-button-bg shadow-md transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-lg">
                LÓGIN
            </a>

            <?php

            ?>
        </div>
    </main>
    <footer class="w-full mt-12 text-center text-sm text-text-primary opacity-60">
    </footer>
</body>
</html>