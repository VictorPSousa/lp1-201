<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade</title>
</head>
<body>
    <?php
        echo "<h2>Exercício 1</h2>";
        // Exercício 1.
        $num = 10;
        if($num > 0){
            echo "O número ".$num." é positivo";
        }elseif($num < 0){
            echo "O número  ".$num." é negativo";
        }else{
            echo "Número igual a 0";
        }

        echo "<h2>Exercício 2</h2>";
        // Exercício 2.
        $digito = 676;
        $opr = $digito % 2;
        if ($opr == 0) {
            echo "<br/>O número ".$digito." é par";
        }else{
            echo "<br/>O número ".$digito." é ímpar";
        }

        echo "<h2>Exercício 3</h2>";
        // Exercício 3
        $nota = 10;
        $nome = "Débora";

        if($nota >= 7){
            echo "Aprovado";
        }else{
            echo "Reprovado";
        }

    ?>
</body>
</html>