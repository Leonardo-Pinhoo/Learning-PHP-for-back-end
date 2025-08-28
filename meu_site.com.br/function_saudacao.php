<?php
    function saudacao ($nome){
        return "Ola, $nome!";
    }
    echo saudacao("leozindasensibotantesobecapanofreefire2019coronavirus");
    echo("<br>______________________________________________________ <br>");

    function nomeDaFuncao($par1, $par2){
        $result = $par1 + $par2;
        return $result;
    }
    
    $soma = nomeDaFuncao(5, 10);
    echo "O resultado é: $soma";
