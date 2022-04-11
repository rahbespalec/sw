<?php
$numero = $_POST['numero'];

if($numero==1){
    echo "<h1>Domingo</h1>";
}
elseif($numero==2){
    echo"<h1>Segunda</h1>";
}
elseif($numero==3){
    echo"<h1>Terça</h1>";
}
elseif($numero==4){
    echo"<h1>Quarta</h1>";
}
elseif($numero==5){
    echo"<h1>Quinta</h1>";
}
elseif($numero==6){
    echo"<h1>Sexta</h1>";
}
elseif($numero==7){
    echo"<h1>Sábado</h1>";
}
elseif($numero <> 1 || 2 || 3 || 4 || 5 || 6 || 7 ){
    echo"<h1>Erro, volte e escolha um número de 1 a 7</h1>";
}


?>