<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXERCÍCIOS</title>
</head>
<body>
    <?php
    # Exercício 1
    echo "<h2>Exercício 1</h2>";
    $texto = "Domina-te e suporta";
    $cont = 0;
    while($cont < 10){
        echo ($cont + 1)." - ".$texto."<br/>";
        $cont++;
    }

    # Exercício 2
    echo "<h2>Exercício 3</h2>";
    $a = 374;
    $b = -467;
    $c = 23;
    $d = 99;
    $soma_a_c = $a + $c;
    $mult_b_d = $b * $d;
    if($soma_a_c > $mult_b_d){
        echo "A+C é maior que B*D";
    }else if($soma_a_c < $mult_b_d){
        echo "A+C é menor que B*D";
    }else{
        echo "A+C é igual a B*D";
    }

    # Exercício 3
    echo "<h2>Exercício 3</h2>";
    $sal_base = 1000;
    $sal_total;
    $reajuste1 = 0.5;
    $reajuste2 = 0.3;
    if($sal_base <= 300){
        $sal_total = $sal_base + ($sal_base * $reajuste1);
    }else{
        $sal_total = $sal_base + ($sal_base * $reajuste2); 
    }
    echo "Salário sem o reajuste: ".$sal_base;
    echo "<br/>Salário com o reajuste: ".$sal_total;

    # Exercício 4
    echo "<h2>Exercício 4</h2>";
    $str1 = "abcd";
    $str2 = "bcda";
    echo $str1 == $str2 ? "IGUAL" : "DIFERENTE";
    /*if($str1 == $str2){
        echo "IGUAL";
    }else{
        echo "DIFERENTE";
    }*/

    # Exercício 5~6
    echo "<h2>Exercício 5~6</h2>";
    $n_max = 8;
    $i = 1;
    $linha = "Dell é péssima";
    while ($i <= $n_max) {
        echo ($i)." - ".$linha."<br/>";
        $i++;
    }

    # Exercício 7
    echo "<h2>Exercício 7</h2>";
    $max = 500;
    while ($max >= 10) {
        echo $max.", ";
        $max--;
    }

    ?>
</body>
</html>