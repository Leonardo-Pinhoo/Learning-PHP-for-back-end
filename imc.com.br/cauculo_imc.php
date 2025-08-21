<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $idade = $_POST['idade'];
    $imc = $peso / ($altura * $altura);
    echo "<p> <h2> Seu imc foi de ". round($imc, 2). "</h2> </p>";
?>    
    <p><img src="https://sandermedicalcenter.com.br/wp-content/uploads/2023/08/imc.jpg" alt="O Galinho Chicken Little" width="350" height="400"></p>
<?php
    if($imc < 18.5){
        echo "<p> <h2>De acordo com o seu imc de ". round($imc, 2). " você está em subpeso </h2></p>";
    } elseif($imc >= 18.5 && $imc < 24.9){
        echo "<p> <h2>De acordo com o seu imc de ". round($imc, 2). " você está com o peso ideal </h2></p>";
    } elseif($imc >= 24.9 && $imc < 29.9){
        echo "<p> <h2>De acordo com o seu imc de ". round($imc, 2). " você está em sobrepeso </h2></p>";
    }elseif($imc >= 29.9 && $imc < 34.9){
        echo "<p> <h2>De acordo com o seu imc de ". round($imc, 2). " você está com obesidade nível 1 </h2></p>";
    } elseif($imc >= 34.9 && $imc < 39.9){
        echo "<p> <h2>De acordo com o seu imc de ". round($imc, 2). " você está com obesidade nível 2 </h2></p>";
    } elseif($imc >= 39.9){
        echo "<p> <h2>De acordo com o seu imc de ". round($imc, 2). " você está com obesidade nível 3 ou mórbida </h2></p>";
    } else {
        echo "<p><h2>Resultado não encontrado! </h2></p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.html">
        <h2>Clique aqui para voltar: </h2><br>
        <input type="submit" value = "Voltar" placeholder = "Clique aqui para voltar">
    </form>
    
</body>
</html>