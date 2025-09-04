<?php

    function login($login, $password){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($login === 'admin' && $password === 'adm@10'){
                header("Location: painel.php");
                exit;
            }else{
                $msg = urldecode("Usuario ou senha inválido");
                header("Location: index.php?msg=$msg");
            }
        }
    }
