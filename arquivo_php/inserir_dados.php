<?php

    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "primera linha de texto\n");
    fclose($arquivo);
