<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title>Aula 04 - LP1</title>
</head>
<body>
    <h1>Continuação do fluxo de dados</h1>
    <div id="laco1">
        <?php

            echo '<h1> for e foreach </h1>';

            for($i = 0; $i <= 100; $i++){
                echo $i." - ";
            }

            echo '<h1>Exercício 1 - Fazer uma tabuada</h1>';
            echo '<h2>Tabuada do 2</h2>';
            for($n = 0; $n <= 10; $n++){
                echo "<br/>2 X $n = ".($n * 2);
            }

            echo '<h1>Exercício 2 - Fazer "todas" as tabuadas</h1>';
            echo '<h2>Tabuadas - lado a lado em caixa</h2>';
            for($n = 0; $n <= 10; $n++){
                echo '<div class="tabuada" id="tabuadas">';
                for($num = 0; $num <= 10; $num++){
                    echo "<br/>$num X $n = ".($n * $num);
                    /*
                    if($num == 10){
                        echo '<br/>------------------------';
                    }
                    */
                }
                echo '</div>';
            }

        ?>
    </div>
    <div id="laco2">
            <?php 

                $vetor = array('a', 'b', 'c', 'd', 'e');
                for($r = 0; $r < 5; $r++){
                    echo $item = $vetor[$r];
                }

                foreach ($vetor as $teste) { // Vetor, matriz ou BD
                    echo $teste;
                }
            
            ?>
    </div>
</body>
</html>