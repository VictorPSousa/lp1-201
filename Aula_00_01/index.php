<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <title>Documento</title>
</head>
<body>
    <h1>Aula Teste</h1>
    <?php
        // Declaração de Variável
        $nome = "Victor";
        $empresa = "IF";

        # Sintaxe (Organização)
        echo "<font color='#F00'>Olá, Mundo!</font>";
        echo "<br/>";
        echo "<font class='texto'>Hoje tem PHP.</font><br/>";
        echo "Meu nome é ".$nome." estudo no ".$empresa;
        echo "<br/>Meu nome é $nome estudo no $empresa";
    ?>
</body>
</html>