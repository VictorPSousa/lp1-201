<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
    <title>AULA 02 - 03 PHP</title>
</head>
<body>
    <?php // abre delimitador
        echo "<h1>Tudo dentro do delimitador</h1>";
            $aluno = "Beto";
            $curso = "ADS";
            $n1 = 5;
            $n2 = 7;
            $n3 = 4;
            $media = ($n1 + $n2 + $n3) / 3;
            echo "
                <div id='principal'>
                    <h1>Colégio Dom Bosco</h1>
                    <h2>Boletim escolar</h2>
                    <p class='nome'>Aluno: $aluno </p>
                    <font class='media'>Média: ".round($media, 2)." </font><br/>
                    Curso: <input type='text' value='".$curso."'/>
                </div>
            ";
    ?> <!-- fecha delimitador -->
    <h1>Fora do delimitador</h1>
    <div id="principal">
        <h1>Colégio Dom Bosco</h1>
        <h2>Boletim escolar</h2>
        <p class="nome">Aluno: <?php echo $aluno ?></p>
        <font class="media">Média: <?php echo round($media, 3) ?> </font><br/>
        Curso: <input type="text" value="<?= $curso ?>"/>
    </div>
</body>
</html>