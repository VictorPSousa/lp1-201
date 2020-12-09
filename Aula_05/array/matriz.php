<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <?php
        echo "<h1>Declarar uma matriz.</h1>";
        $alunoNota = array(
            "l0" => array("Débora", "10", "10", "10"),
            "l1" => array("Tiemy", "9", "9", "9"),
            array("Victor", "8", "8", "8"),
            array("Pedro", "6", "7", "6")
        );
        echo "Mostrar aluno: ".$alunoNota[0][0];
        echo "<h1>Time de futebol.</h1>";
        $times = array(
            array("texto0.txt", "figura0.jpg"),
            array("texto1.txt", "figura1.jpg"),
            array("texto2.txt", "figura2.jpg"),
            array("texto3.txt", "figura3.jpg")
        );
        #echo $times[2][1];
    ?>
    <img src="../img/<?= $times[0][1]; ?>" alt="SPFC" width="400" /><br/>
    <iframe src="texto/<?= $times[0][0]; ?>" width="400"></iframe>
</body>
</html>