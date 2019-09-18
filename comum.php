<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">    
    <title>Tela inicial</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>PREMOLTEX</h1>
        <h2>Muito obrigado pela sua visita</h2>
    </header>  
    <main class="principal">
        <div class="conteudo">
          
           <!--MODO ABSOLUTO-->
            <?php 
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
                
        </div>
    </main>
    
</body>
</html>