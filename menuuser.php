<?php

    SESSION_START();
    if(isset($_SESSION["usuario"])){
        $user = $_SESSION["usuario"];
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Menu</title>
</head>
<body>
    <div id="cadastro">
        <h2>Menu Principal do Perfil Padrão</h2><br/>
    </div>
    <div id="form">
        <fieldset class="linha">
            <p>Perfil:  <?= $user ?></p>
        </fieldset>
        <fieldset class="linha">
            <form method="POST" action="crud/inserirfoto.php" enctype="multipart/form-data">
                <fieldset class="linha">
                    <div class="input half volta">
                        <input type="text" maxlength="60" name="nome" id="nome" placeholder="Nome" />
                    </div>
                    <div class="input half espaco">
                        <input type="text" maxlength="60" name="apelido" id="apelido" placeholder="Apelido" />
                    </div>
                </fieldset>
                <fieldset class="linha">
                    <div class="input half enviar">
                        <input type="file" class="imagem" id="imagem" name="imagem"  />
                    </div>
                    <div class="input half enviar">
                        <input type="submit" class="cadastrar" value="Enviar" />
                    </div>
                </fieldset>
            </form>
        </fieldset><hr/>
        <fieldset class="linha">
            <form action="exibirfigura.php" method="get">
                <div class="input half volta">
                    <input type="text" maxlength="60" name="codigo" id="codigo" placeholder="Digite o código a ser buscado" />
                </div>
                <div class="input half espaco">
                    <input type="submit" class="cadastrar" value="Buscar" />
                </div>
            </form>
        </fieldset><hr/>
        <fieldset class="linha">
            <div class="input half">
                <a href="cadastra.php" class="cadastrar cadastra-link">
                    Cadastro
                </a>
            </div>
            <div class="input half">
                <a href="logout.php" class="cadastrar cadastra-link">
                    Sair
                </a>
            </div>
        </fieldset>
    </div>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = 'index.php';
            </script>";
    }
?>