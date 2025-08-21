<?php
    
    $pesssoa = ["nome" => "joao", "idade" => 30];
    echo $pesssoa ["nome"];
?>

<p>Olá, aqui é um HTML</p>
<?php
    $aluno = ["nome" => "Francisco", "idade" => 16, "nota" => 100];
    $data = date('d-m-Y');
    $dia = date('d');
    $hora = date('h:i:s');
    $ano_atual = date('Y');
    $ano = $ano_atual - $aluno["idade"];
    echo "Olá $aluno[nome], você tem $aluno[idade] e sua nota foi $aluno[nota]";
    echo "<p> Você nasceu em $ano </p>";
    echo "<p> Hoje é dia $data </p>";
    echo "<p> Hoje, $dia é dia nacional da Habitação </p>";
    echo "<p> São exatas $hora </p>"
?>