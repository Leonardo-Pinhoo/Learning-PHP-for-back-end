<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Adicionar nome na lista de chamada</h2>
    <form action="desafio.php" method="post">
        <label>Nome</label><br>
        <input type="text" name="nome" id="nome" required><br><br>

        <label>Numero da chamada</label><br>
        <input type="text" name="numero" id="numero" required><br><br>

        <button type="submit">Adicionar</button>


    </form>
    
    <h3>Lista de alunos</h3>

    <?php  

    $nome = $_POST['nome']??'';
    $numero = $_POST['numero']??'';

    $arquivo = fopen("chamada.txt", "a");
    fwrite($arquivo, " $nome - $numero \n");
    fclose($arquivo);

    $arq = fopen("chamada.txt", "r");
    while(!feof($arq)){
        echo fgets($arq) . "<br>";
    }
    fclose($arq);
    //header("Location: desafio.php");

    ?>

</body>
</ht'
