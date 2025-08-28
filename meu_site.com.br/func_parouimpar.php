
<?php 

    $n1 = $_POST['numero'];

    function parOUimpar($n1){
        if($n1 % 2 == 0){
            return "par";
        } else{
            return "impar";
        }
    }
    echo parOUimpar($n1);