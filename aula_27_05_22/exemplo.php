<?php
    echo "função sem retorno e sem parâmetro";
    function teste(){
        echo "JESUS SALVA";
    }
    echo"<br>";
    teste();
    echo"<hr>";


    echo "função com retorno e sem parâmetro";
    function segundo(){
        $retorno="JESUS NOSSO SALVADOR";
        return $retorno;
    }
    $recebe = segundo();
    echo"<br>";
    echo "$recebe <br>";
    echo"<hr>";


    echo "função sem retorno e com parâmetro <br>";
    function terceiro($a){
        echo"$a <br>";
        
    }
    terceiro('JOÃO 3:16');
    echo "<hr>";


    echo "função com retorno e com parâmetro <br>";
    function quarto($x, $y){
        $soma=$x + $y;
        return $soma;
        
    }
    $resultado = quarto(10,20);
    echo"A soma é:$resultado";
    echo"<br>";
    echo "<hr>";
   

?>