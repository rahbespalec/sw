<?php
    $nome=$_POST['nome'];
    $ano=$_POST['ano'];
    $total= 2022 - $ano;

    echo "<h1 style='color:red;'> Olá {$nome}, pelos meus cálculos você tem {$total} anos de idade!<h1>";
 
?>