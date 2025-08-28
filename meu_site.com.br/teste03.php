<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];
    
    include "funcoes.php";
    echo fiap($nome, $email, $motivo);