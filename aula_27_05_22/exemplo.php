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
   
// Utilizando a função 4 novamente 
echo "REUTILIZANDO A FUNÇÃO <br> <br>";

$outro = soma(55, 5);
echo $outro;

echo "<br>";
echo "<hr>";

// Exemplo 05
echo "EXEMPLO 05 - CRIANDO FUNÇÃO COM VETORES <br> <br>";

$v = [1, 3, 4, 5, 63, 4, 0, 2];

function somar_v($entrada){
    $s = 0;
    for($i = 0; $i < count($entrada); $i++){
        $s += $entrada[$i];
    }
    echo $s;
}

somar_v($v);

echo "<br>";
echo "<hr>";

// Exemplo 06
echo "EXEMPLO 06 - FUNÇÃO QUE VERIFICA ÍMPARES E PARES <BR> <BR>";

$v = [1, 3, 4, 65, 63, 4, 10, 2];

function p_i($entrada){
    for($i = 0; $i < count($entrada); $i++){
        if($entrada[$i] % 2 == 0){
            echo "$entrada[$i] = Par <br>";
        }
        else{
            echo "$entrada[$i] = Ímpar <br>";
        }
    }
}

p_i($v);
?>
?>
