<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Formulario Cadastro</title>
</head>
<body>
    <form action="crud/cadastra.php" method="POST">
        <div id="cadastro">
                <h2>Cadastro</h2><br/>
        </div>

        <div id="form">
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="funcionario" name="funcionario" style="width:33rem" placeholder="Funcionario">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="endereco" name="endereco" placeholder="Endereço">
                </div>
                <div class="input">
                    <input type="text" id="bairro" name="bairro" placeholder="Bairro">
                </div>
            </fieldset>
           
            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade">
                </div>
                <div class="input">
                    <input type="text" id="uf" name="uf" style="width: 3em" placeholder="UF">
                </div>
            </fieldset>

            <fieldset class="linha">
                <div class="input">
                    <input type="text" id="nomedamae" name="nomedamae" placeholder="Nome da mãe">
                </div>
                <div class="input">
                    <input type="text" id="nomedopai" name="nomedopai" placeholder="Nome do pai">
                </div>
            </fieldset>
            <br/>
            <button class= "cadastrar" type="submit" name="submit">Cadastrar</button>
        </div>
</body>
</html>

