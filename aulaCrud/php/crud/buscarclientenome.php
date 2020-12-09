<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php include_once 'conexao.php';   ?>

</head>
<body>
    <div id="listar">
    
    <?php
        $nome = $_POST["cxbuscanome"];

        $consulta = "select *from tbcliente where nome LIKE '%$nome%' ";

        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        if($resultado != 0)
        {
            echo "<script>alert('Cliente localizado com sucesso!');</script>";
        }
        else
        {
           echo "<script>
                    alert('Cliente não localizado');
                    window.location.href = '../../index.php'
                 </script>";
        }

        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <div id="cx1"> 
        <form action="alterarcliente.php" method="POST">

        Código: <input type="text" name="cxcod" value="<?php echo $linha['codigo']; ?>" readonly> <br/>
        Nome: <input type="text" name="cxno" value="<?php echo $linha['nome'];?>" > <br/>
        E-mail: <input type="text"  name="cxem" value="<?php echo $linha['email'];?>" > <br/> </br>     

        <button type="submit" style="border:none;background:#fff">
        
        <img src="../../img/bloco.png" width="40" height="30">
                
        </button>  
        
        <a href="excluircliente.php?id=<?php echo $linha['codigo']; ?>">
        <img src="../../img/lixeira.png" width="40" height="30">
        </a>
        </form>
    </div>  

    <?php } ?>
        <a href="../../index.php">Voltar</a>
    </div>    
</body>
</html>