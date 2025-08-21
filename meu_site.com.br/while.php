<h3> Este é um while</h3>
<?php

    $contador = 1;
        while ($contador <= 5) {
            echo "<p> Número: $contador</p>";
            $contador++;
        }
?>        
    <br>
    <br>
    <h3> Este é um Do While </h3>
<?php
    $contador = 1;
    do{
        echo "<p>Número: $contador</p>";
        $contador++;
     }while($contador <= 5);
?>