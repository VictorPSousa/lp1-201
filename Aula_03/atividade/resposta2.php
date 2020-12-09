<?php
    $valor1 = $_POST["vl1"];
    $valor2 = $_POST["vl2"];

    echo "Soma: $valor1 + $valor2 = ".($valor1 + $valor2);
    echo "<br/>Subtração:  $valor1 - $valor2 = ".($valor1 - $valor2);
    echo "<br/>Multiplicação:  $valor1 * $valor2 = ".($valor1 * $valor2);
    echo "<br/>Divisão:  $valor1 / $valor2 = ".($valor1 / $valor2);
    echo "<br/>Resto:  $valor1 % $valor2 = ".($valor1 % $valor2);
?>