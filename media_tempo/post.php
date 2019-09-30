<div class="titulo">Post do tempo médio</div>
<?php 

    $tempo = [
        20,  //Aqui pega o primeiro tempo (em segundos ou minutos) de atendimento já realizado pelo vendedor.
        15,  //Esse tempo inicia quando é gerada a primeira senha e vai até a chamada do próximo cliente.
        22,  //Após concluir esse primeiro ciclo é guardado esse intervalo de tempo nesse primeiro índice (0)
        14,  //Repete isso por mais 4 vezes pra depois enviar essa array para realizar a equação
        5,   //Será enviado via $_POST com o NAME = cinco.
    ];
    //print_r($tempo);     
    $media = array_sum($tempo) / count($tempo);    //Tirando a média de tempo da array.
    echo "$media <br>"; //imprime na tela a média da soma dos valores dentro da array e divide pela mesma quantidade dos valores da array. 
   
    $senha = [1,2,3,4,5,6];   //Aumentando um índice da array aqui ele aparece a mensagem na tela de tempo de espera. Ele pega essa variável ($senha) lá no momento em que é gerada (só indicar esse local corretamente).

    if($senha > $tempo){
        echo "Tempo médio de espera: $media minutos<br>";
    }
   