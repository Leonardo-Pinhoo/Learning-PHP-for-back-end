<?php

    $arq = fopen("dados.txt", "r");
    while(!feof($arq)){
        echo fgets($arq) . "<br>";
    }
    fclose($arq);