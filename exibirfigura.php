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
        <?php
            include_once "crud/conexao.php";
            $cod = $_GET["codigo"];

            if($cod < 0){
                $consulta = "SELECT MAX(codigo) AS `recente` FROM `tbcliente`";
                $rs = mysqli_query($conn, $consulta) or die(mysql_error());
                $linha = mysqli_fetch_array($rs);
                $cod = $linha["recente"];
            }
            
            $sql = "SELECT * FROM `tbcliente` WHERE `codigo` = '$cod'";
            $resultado = mysqli_query($conn, $sql) or die(mysql_error());
            $row = mysqli_fetch_array($resultado);
        ?>
        
        <fieldset class="linha">
            <div class="input">
                <input type="text" id="nome" name="nome" style="width:33rem" placeholder="<?= $row["nome"] ?>" value="<?= $row["nome"] ?>" readonly/>
            </div>
        </fieldset>

        <fieldset class="linha fotos">
            <img src="data:image/jpeg;base64,<?= base64_encode($row["foto"]); ?>" class="foto" />
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