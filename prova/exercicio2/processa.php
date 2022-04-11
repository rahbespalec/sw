<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];

echo "<h1>Você digitou os números nessa ordem:</h1>";
echo "<p>{$num1}</p>";
echo "<p>{$num2}</p>";
echo "<p>{$num3}</p>";

echo "<h1>ORDEM CRESCENTE:</h1>";

    if($num1<$num3 && $num1>$num2){
        echo "{$num1} < ";
    }
    elseif ($num2<$num3 && $num2 < $num1){
        echo "{$num2} < ";
    }
    elseif($num3<$num1 && $num3 < $num2){
        echo "{$num3} < ";
    };

    if ($num1 > $num2 && $num1 < $num3){
        echo"{$num1} < ";
    }
    elseif($num2>$num1 && $num2<$num3){
        echo"{$num2} < ";
    }
    elseif($num3>$num1 && $num3<$num2){
        echo"{$num3} < ";
    };

    if ($num1>$num3 && $num1>$num2){
        echo"{$num1} ";
    }
    elseif($num2>$num3 && $num2>$num1){
        echo"{$num2}";
    }
    elseif($num3>$num1 && $num3>$num2){
        echo"{$num3}";
    };

?>