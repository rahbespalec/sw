<?php

    $teste=[10, 'Oi', 1.6, true];
    $quantidade = count($teste);
    echo "Número de elementos no vetor: $quantidade";
    echo "<hr>";
    for ($i=0;$i<$quantidade;$i++){
        echo "Valor do i =$i - Valor: $teste[$i]<br>";
    }
    echo "<hr>";
    $numero_qualquer = (rand(1,10))/10;
    echo $numero_qualquer;
    echo "<hr>";
    $vetor = [1,5,8,10];
    $n = count($vetor);
    $soma = 0;
    for ($a=0;$a<$n;$a++){
        $soma = $soma + $vetor[$a];
    }
    echo $soma;

?>