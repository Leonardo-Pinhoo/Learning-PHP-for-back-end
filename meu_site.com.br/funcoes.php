<?php

    //teste01.php
    function saudacao($nome){
        return "Bem-vindo, $nome! Sua participação foi confirmada!";
    }

    //teste02.php
    function databank($db){
        return "Seu banco, $db, foi conectado com sucesso!";
    }

    //teste03.php e form_fiap.html
    function fiap($nome, $email, $motivo){
        echo "<h2>Lista de alunos que receberão FIAP: </h2>";
        echo "<ol>
        <li>O aluno <strong>$nome</strong>, de email: <strong>$email</strong>, recebeu uma FIAP por conta que: <strong>$motivo</strong></li>
        </ol>";
    }

    //nota.html e caucula_nota.php
    function nota($nota, $nome){
        if ($nota >= 7){
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> e foi aprovado!";
        }elseif ($nota >=5 && $nota <7){
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong>e ficou de recuperação";
        }else{
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> e foi reprovado";
        }
    }
