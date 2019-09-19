<div class="titulo">Escolha o vendedor</div>

<?php 
/*PARA O SISTEMA DE SENHAS*/

// OPÇÃO PERMANENTE NO MONITOR ANTES DE SEU USO

/*
if(true){
    echo "Gerando senha <br>";
} else{
    echo"Atendimento geral <br>";
}
echo "Retire sua senha";
*/


/*

// OPÇÃO PERMANENTE NO MONITOR ANTES DE SEU USO

if("button" == true){
    echo "Escolha o vendedor $v <br>";
} else{
    echo"atendimento personalizado <br>";
}
*/

//DEPOIS DE SELECIONAR O VENDEDOR

$v = [joao,maria,jose,carlos,quirino,regina];
$v1 = João;
$v2 = Maria;
$v3 = José;
$v4 = Carlos;
$v5 = Quirino;
$v6 = Regina;
$vip = 'Vendedor(a)';


switch($v = 4){
    case 0:
        echo "$vip <br> $v1 <br> Senha nº <br>";
        break;
    case 1:
        echo "$vip <br> $v2 <br> Senha nº <br>";
        break;
    case 2:
        echo "$vip <br> $v3 <br> Senha nº <br>";
        break;
    case 3:
        echo "$vip <br> $v4 <br> Senha nº <br>";
        break;
    case 4:
        echo "$vip <br> $v5 <br> Senha nº <br>";
        break;
    case 5:
        echo "$vip <br> $v6 <br> Senha nº <br>";
        break;
}

echo "Retire sua senha";