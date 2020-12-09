<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 1</title>
</head>
<body>
    <form action="php/crud/inserirdadoscliente.php" method="POST">
        <fieldset>
            Nome:</br>
            <input type="text" name="cxnome"></br>
            E-mail:</br>
            <input type="text" name="cxemail"></br>
            <input type="submit" value="Enviar">
            <a href="php/crud/listarcliente.php">Listar</a>
        </fieldset>
    </form>
    
    <form action="php/crud/buscarclientenome.php" method="post">
        Digite o nome do cliente...
        <input type="text" name="cxbuscanome"><br/>
        <button type="submit"> Buscar</button>
    </form>
</body>
</html>