<?php

function mensagem($mensagem)
{
    echo "$mensagem \n";
}

function mostrarSenha($senha, $senhaComfirmada)
{
    if($senha === $senhaComfirmada){
        mensagem("Sua senha é: #$senha#");
    } else {
        mensagem("Não será mostrado a senha, pois está incorreta.");
    }
}

function passwordCheck($senha, $password)
{
    if($senha === $password){

        mensagem("Senha correta.");
        mensagem("Pode entrar!!!");

        mostrarSenha($senha, $password);
    }else{
        mensagem("Senha incorreta.");
        mensagem("Não pode entrar :(");
    }
}

function profileIdentification(&$name)
{
    if($name === $name){
        mensagem("Olá $name :) \n");
    } else {
        mensagem("Perfil não encontrado");
    }
}


function standardizeFunctions($senha, $conta){
    if (is_bool($senha) && is_bool($conta)){
        return standardizeFunctions;
    }
}