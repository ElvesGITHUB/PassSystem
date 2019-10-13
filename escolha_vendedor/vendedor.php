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
    

<div class="titulo">Escolha o vendedor</div>

<!--ESCOLHENDO O VENDEDOR -->

<div class="vendedores">
    <div class="icones">
        <button name="elza" id="elza"><img src="assets/img/elza.jpg"></button>
    </div>
    <div class="icones">
        <button name="jose" id="jose"><img src="assets/img/jose.jpg"></button>
    </div>
    <div class="icones">
        <button name="benedito" id="benedito"><img src="assets/img/benedito.jpg"></button>
    </div>
    <div class="icones">
        <button class="cindy" id="cindy"><img src="assets/img/cindy.jpg"></button>
    </div>
    <div class="icones">
        <button class="laura" id="laura"><img src="assets/img/laura.jpg"></button>
    </div>
    <div class="icones">
        <button class="maria" id="maria"><img src="assets/img/maria.jpg"></button>
    </div>
    <div class="icones">
        <button class="tiringa" id="tiringa"><img src="assets/img/tiringa.jpg"></button>
    </div>
</div>

<?php 

//OUTRA OPÇÃO PARA CRIAR A SENHA

//MEU RANGE DE NOME DO VENDEDOR E SENHA PARA O PASSSYSTEM
echo "<div center><h2>Vendedor(a)</h2></div>";
$vend = ["Elza", "José", "Benedito", "Cindy", "Laura", "Maria", "Tiriba"];

$keyname = array_rand($vend);
echo "<div center><h1>$vend[$keyname]</h1></div>";

echo "<div center><h2>Senha</h2></div>";
$senha = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

$npass = array_rand($senha);
echo "<div center><h1>$senha[$npass]</h1></div>"
?>

<style>
    [center]{       /* pode usar as chaves '[]' ao invés do ponto ( . )*/
        display: flex;
        justify-content: center;
    }
    .vendedores{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: #0000ff71;
        color: #f0f8ff;
        display: flex;          /*Aqui é o início de configuração do Flex*/
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 20px 5px 15px 5px;   /*E aqui termina*/    
        z-index: 1; /*Deixa o box-shadow um pouco acima dos outros elementos*/
        box-shadow: 4px 4px 6px 2px #00000063;
        border-radius: 4px;
    }
    .vendedores > .icones > button{
        margin: 10px;
        font-weight: 300;
        font-size: 2.8em;
        border-radius: 4px; 
}
</style>


</body>


<!--

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
 

//Ou esse:

$comum = 1;
$statusLoja;
$statusLoja = $comum <= 0 ? 'Senha Comum' : 'Senha por vendedor';
echo "$statusLoja<br>";

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

//OU ESSE AQUI, QUE ACHO MAIS PRÁTICO E SIMPLES:

echo'<br>';

$vendedor = 'Renato';   //Aqui entra a informação do botão que seleciona o vendedor no FrontEnd
$senha = 0;             //Aqui entra a informação de senha relacionada com o vendedor
$nome_vendedor = '';
switch(strtolower($vendedor)){    
    case 'luiz':
        $senha = '0';
        $nome_vendedor = "Luiz";
        break;
    case 'ana':
        $senha = '1';
        $nome_vendedor = "Ana";
        break;
    case 'renato':
        $senha = '2';
        $nome_vendedor = "Renato";
        break;
    case 'jose':
        $senha = '3';
        $nome_vendedor = "José";
        break;    
    default:
        $senha = '4';
        $nome_vendedor = "Maria";
        break;
}

echo "<p>Vendedor: $nome_vendedor<br>Senha: $senha</p>";

-->