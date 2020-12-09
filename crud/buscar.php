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
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>Lista de Funcionários</title>
    <?php include_once 'conexao.php'; ?>
</head>
<body>
    <div id="listar">
        <div id="cadastro">
            <h2>Funcionário</h2><br/>
        </div>
        
        <?php
            $nome = $_POST["busca"];

            $consulta = "SELECT * FROM tbfuncionario WHERE funcionario LIKE '%$nome%'"; // like busca parecido, % verifica na frente e atrás
            
            $executar = mysqli_query($conn, $consulta);
            $resultado = mysqli_num_rows($executar);

            if($resultado != 0){
                echo "<script>alert('Cliente localizado com sucesso!');</script>";
            }else{
                echo "<script>
                        alert('Cliente não localizado!');
                        window.location.href='../menu.php'
                    </script>";
            }
            
            while($linha = mysqli_fetch_array($executar)){
        ?>
        <div id="form">
            <form action="editar.php" method="POST">
                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="cod" name="cod" value="<?= $linha['codigo'] ?>" style="width:33rem" placeholder="Código" readonly>
                    </div>
                </fieldset>

                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="nome" name="nome" value="<?= $linha['funcionario'] ?>" style="width:33rem" placeholder="Nome">
                    </div>
                </fieldset>
                
                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="end" name="end" value="<?= $linha['endereco'] ?>" style="width:33rem" placeholder="Endereço">
                    </div>
                </fieldset>

                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="bairro" name="bairro" value="<?= $linha['bairro'] ?>" style="width:33rem" placeholder="Bairro">
                    </div>
                </fieldset>
                
                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="cidade" name="cidade" value="<?= $linha['cidade'] ?>" style="width:33rem" placeholder="Cidade">
                    </div>
                </fieldset>
                
                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="uf" name="uf" value="<?= $linha['uf'] ?>" style="width:33rem" placeholder="UF">
                    </div>
                </fieldset>

                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="nmmae" name="nmmae" value="<?= $linha['nomedamae'] ?>" style="width:33rem" placeholder="Nome da Mãe">
                    </div>
                </fieldset>
                
                <fieldset class="linha">
                    <div class="input">
                        <input type="text" id="nmpai" name="nmpai" value="<?= $linha['nomedopai'] ?>" style="width:33rem" placeholder="Nome do Pai">
                    </div>
                </fieldset>
                
                <fieldset class="linha">
                    <button type="submit" class="cadastrar">
                        <img src="../img/edita.png" width="20px" alt=""> Edita
                    </button>
                    <a href="exclui.php?id=<?= $linha['codigo']; ?>" class="cadastrar cadastra-link">
                        <img src="../img/exclui.png" width="20px" alt=""> Exclui
                    </a>
                </fieldset><hr/>
            </form>

        </div>

        <?php
            }
        ?>
        <a href="../menu.php" class="cadastrar cadastra-link">Voltar</a>
        
    </div>
</body>
</html>
<?php
    }else{
        echo "<script>
                window.location.href = '../index.php';
            </script>";
    }
?>