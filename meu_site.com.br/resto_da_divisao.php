<?php

    $numero1 = 10;
    $numero2 = 3;
    $resto = $numero1%$numero2;
    $divisao = $numero1/$numero2;
    echo "A divisão de ". $numero1. " por ". $numero2. " é ". number_format($divisao, 2). "<br>";
    echo "E o resto da divisão foi:". $resto; 

?>