<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>PassSystem</title>
</head>
<body>
    <header class="cabecalho">
        <h1>LogoLoja</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo azul">
                    <h3>Atendimento Geral</h3>
                    <ul>
                        <li>
                            <a href="comum.php?dir=geral&file=senha" onclick="inicia();">
                            Gerar senha                            
                            </a>
                        </li>                           
                    </ul>
                </div>     
                <div class="modulo laranja"> 
                <h3>Atendimento por Vendedor</h3>                  
                    <ul>
                        <li>
                            <a href="comum.php?dir=prefer&file=senhaprefer" onclick="inicia();">
                            Gerar senha
                            </a>
                        </li>                                      
                    </ul>
                </div>
                <div class="modulo azul"> 
                <h3>Post</h3>                   
                    <ul>
                        <li>
                            <a href="comum.php?dir=media_tempo&file=post">
                            Gerando média do tempo
                            </a>
                        </li>                           
                        <li>
                            <a href="comum.php?dir=media_tempo&file=cronometro">
                            Cronometro
                            </a>
                        </li>                           
                        <li>
                            <a href="comum.php?dir=escolha_vendedor&file=vendedor">
                            Escolha o vendedor
                            </a>
                        </li>                           
                    </ul>
                </div>     
            </nav>        
        </div>    
    </main>
    <footer class="rodape">
        EBS  &copy <?= date('Y');?>
    </footer>
    <script src="js/contador.js"></script>
</body>
</html>