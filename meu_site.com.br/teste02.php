<?php  

    require "funcoes.php";
    $nome_db = "mongo";
    $msg = databank($nome_db);
    echo $msg;
