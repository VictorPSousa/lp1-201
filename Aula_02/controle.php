<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Controle</title>
</head>
<body>
    <?php
        $animal = "Porco";
        $animais;
        // var_dump($animal);
        // var_dump(isset($animal)); # true
        // var_dump(isset($animais)); # false
        # isset verifica se a váriavel existe e se possui dados dentro dela (se está em uso).
        
        // unset($animal);
        # unset destrói/deleta a variável
        var_dump(empty($animal));
        # empty verifica se a variável está vazia
        echo "<h1>Operadores de comparação</h1>";
        // ==, ===, >, <, >=, <=, (!=,<>)
        $a = 20; $b = 100;
        // $c = ($a == $b);
        // var_dump($c);
        echo $c = ($a <> $b);
        echo "<h1>Operadores Lógicos</h1>";
        $f = (true && false);
        $g = (true || false);
        $h = (true xor false); // apenas uma condição deve ser verdadeira
        $i = (!true);
        var_dump($h);

        /*
        if(){}else{}
        */
        $idade = 10;
        echo "<h1>Controle ternário</h1>";
        echo $idade >= 18 ? "Maior de idade" : "Menor de idade";
        # operador ternário

        echo "<h1>Pós incremento</h1>";
        $k = 5;
        $k++;
        // $k = $k + 1;
        echo $k;
        // k = 6
        
        echo "<h1>Laços</h1>";
        $i = 1;
        while($i <= 10)
        {
            echo $i++."<br/>";
        }

        $vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $r = 0;
        while($r < 10){
            if($vetor[$r] == 7){
                break;
            }else{
                echo $vetor[$r]."<br/>";
                $r++;
            }
        }
        /*
        do{

        }while();

        for(){

        }
        */
    ?>
</body>
</html>