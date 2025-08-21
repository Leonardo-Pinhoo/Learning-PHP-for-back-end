<?php

    //echo $_GET['nome'];
    $valor1 =  $_GET['valor1'];
    $valor2 =  $_GET['valor2'];
    $sinal =  $_GET['sinal'];
    $multi = $valor1 * $valor2;
    $soma = $valor1 + $valor2;
    $divi = $valor1 / $valor2;
    $menos = $valor1 - $valor2;
    $resultado =  $valor1.$sinal.$valor2." = "  ; 
    echo $resultado;

    if($sinal == "*"){
        echo $multi;
    }
    if($sinal == "+"){
        echo $soma;
    }
    if($sinal == "-"){
        echo $divi;
    }
    if($sinal == "/"){
        echo $menos;
    }
