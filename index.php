<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Login</title>
</head>
<body>
    <form action="crud/validar.php" method="POST">
        <div id="cadastro">
            <h2>Login</h2><br/>
        </div>
        <div id="form">
            <fieldset class="linha">
                <div class="input">
                    ADM
                    <input type="radio" id="perfil" name="perfil" value="adm"/>
                    USER
                    <input type="radio" id="perfil" name="perfil" value="user" checked/>
                </div>
            </fieldset>
            <fieldset class="linha">
                <div class="input">
                    <input type="text"id="login" name="login" style="width:33rem" placeholder="Usuário" required>
                </div>
            </fieldset>
            <fieldset class="linha">
                <div class="input">
                    <input type="password" name="senha" id="senha" style="width:33rem" placeholder="Senha" required>
                </div>
            </fieldset>
        <input type="submit" class="cadastrar" name="submit" value="Entrar" />
    </form>
</body>
</html>