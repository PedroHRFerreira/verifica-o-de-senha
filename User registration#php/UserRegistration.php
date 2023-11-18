<?php

require_once"function.php";

$user = [
    "perfil" =>[
        "name" => "Pedro",
        "senha" => 2007,
    ],
    ];


foreach($user as $perfil)
{
    standardizeFunctions( $name = $perfil["name"],
    $senha = $perfil["senha"]);

        $senhaDigitada = 2007;

        passwordCheck($senha, $senhaDigitada);
        profileIdentification($name);
}