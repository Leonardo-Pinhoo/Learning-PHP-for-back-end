<?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 =  $_POST['n3'];

    function medida($n1, $n2, $n3){
        return ($n1+$n2+$n3) /3;
    }
    $final = medida($n1,$n2,$n3);
    echo "A sua media foi: ". number_format($final, 2);
    