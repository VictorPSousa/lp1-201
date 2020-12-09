<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento 2</title>
</head>
<body>
    <h1>Tipos de Variáveis, exemplos básicos: </h1>
    <?php
        $cidade = "Guarulhos"; // String ou texto
        $altura = 1.8; // Decimal - Float'
        $filhos = true; // booleano - verdadeiro ou falso
        $idade = 36; // Inteiro
        $salario = 1000;
        $aumento = .1;
        
        #var_dump($cidade);// Mostra o tipo de variável e o que está armazenado nela.
        
        echo "Eu moro em ".$cidade;
        echo "<br/>Cálculo no PHP, operações aritméticas.<br/>"; 
        
        $total = $salario * $aumento;
        echo "Total: ".$total;

        // parse error: Comando digitado errado.
        # Bloco de decisão
        if($total >= 100)
        {
            echo "<br/>Valor acima do esperado<br/>";
        }
        else
        {
            echo "<br/>Valor em espera<br/>";
        }
    ?>
</body>
</html>