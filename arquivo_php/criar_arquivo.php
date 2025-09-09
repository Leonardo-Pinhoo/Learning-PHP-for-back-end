<?php

    $arquivo = fopen("dados.txt", "w");
    fwrite($arquivo, "primera linha de texto\n");
    fclose($arquivo);
