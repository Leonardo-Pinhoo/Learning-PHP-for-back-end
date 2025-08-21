<?php

    $valor1 =  $_POST['valor1'];
    $valor2 =  $_POST['valor2'];
    $sinal =  $_POST['sinal'];
    $multi = $valor1 * $valor2;
    $soma = $valor1 + $valor2;
    $divi = $valor1 / $valor2;
    $menos = $valor1 - $valor2;
    $resultado =  $valor1.$sinal.$valor2." = "; 
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
