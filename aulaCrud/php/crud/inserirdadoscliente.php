<?php
    if ($_POST['cxnome'] != ""){
        include_once 'conexao.php';

        $nome = $_POST['cxnome'];
        $email = $_POST['cxemail'];
        $sql = "insert into tbcliente(nome,email) values ('$nome','$email')";

        $query = mysqli_query($conn,$sql);

        echo 'Dados cadastrados com sucesso!';

    }else{
        echo 'Dados não encontrados';
    }

?>
<a href="../../index.php">Voltar</a>