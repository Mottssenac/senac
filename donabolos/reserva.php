
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dona Bólos - Fazer Reserva</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'background-primary': '#080807ff', 
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
            backdrop-filter: blur(10px); 
            background-color: rgba(106, 78, 58, 0.4); 
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

    
        .form-field {
            @apply w-full p-3 text-lg text-white bg-transparent border-2 border-input-border rounded-xl focus:outline-none focus:ring-2 focus:ring-text-primary transition duration-200;
        }

        
        .select-field {
            @apply form-field appearance-none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path stroke="%23F5E9C9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7l-5 5-5-5"/></svg>');
            background-repeat: no-repeat;
            background-position: right 0.7em top 50%;
            background-size: 0.65em auto;
        }
        
        
        .select-field option {
            color: #333333;
        }
        
        
        .textarea-field {
            @apply form-field h-24 resize-none; 
        }
    </style>
</head>
<body>
    <div class="blur-overlay">
        
   
        <div class="w-full max-w-lg text-center p-8 bg-transparent">
            
            <h1 class="text-6xl font-normal text-white tracking-widest mb-2">
                RESERVAR
            </h1>
            <p class="text-lg text-background-primary mb-12 uppercase opacity-80">
                Dona Bólos
            </p>

            <form action="processa_reserva.php" method="POST" class="flex flex-col gap-6">

               
                <div class="text-left">
                    <select id="tipo_bolo" name="tipo_bolo" class="select-field text-background-primary" required>
                        <option value="" disabled selected>TIPOS DE BÓLOS</option>
                        <option value="1kg">1KG</option>
                        <option value="2kg">2KG</option>
                    </select>
                </div>

               
                <input type="date" id="data_entrega" name="data_entrega" placeholder="DD/MM/AAAA" class="form-field text-background-primary" required>
                <p class="text-background-primary text-sm mt-[-10px] mb-[-10px]">*TODAS AS ENTREGAS SÃO RETIRADAS ÀS 10H</p>
                
              
                <div class="text-left">
                    <textarea id="exigencias" name="exigencias" placeholder="EXIGÊNCIAS.." class="textarea-field text-black" rows="4"></textarea>
                </div>


             
                <div class="mt-8">
                    <button type="submit" class="w-full py-4 rounded-xl text-xl font-bold text-background-primary bg-button-bg shadow-lg transition duration-300 ease-in-out hover:bg-opacity-90 hover:shadow-2xl">
                        RESERVAR
                    </button>
                </div>
                
            </form>

        </div>
    </div>
</body>
</html>
