<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include_once 'conexao.php'; ?>
</head>
<body>
    <div id="listar">
    <?php 
        $consulta = "select *from tbcliente";
        $executar = mysqli_query($conn, $consulta);
        while($linha = mysqli_fetch_array($executar)){

    ?>    
    <div id="cx1">
    Código: <input type="text" value="<?php echo $linha['codigo'];?>" readonly> <br/>
    Nome: <input type="text" value="<?php echo $linha['nome'];?>" readonly><br/>
    E-mail: <input type="text" value="<?php echo $linha['email'];?>"" readonly><br/>
    </div>
    <?php } ?>
        <a href="../../index.php">Voltar</a>
    </div>
</body>
</html>