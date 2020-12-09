<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 1</title>
</head>
<body>
    <h1>Atividade 1</h1>
    <?php
        $v1 = -87;
        $result = "";
        if ($v1 > 0) {
            $result = "O valor é <b>positivo</b>.";
        }else if ($v1 < 0) {
            $result = "O valor é <b>negativo</b>.";
        }else{
            $result = "O valor é <b>igual a 0 (zero)</b>.";
        }
        echo $result;
    ?>
</body>
</html>