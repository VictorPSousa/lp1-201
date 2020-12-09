<?php
    if ($_POST['funcionario'] != ""){
        include_once 'conexao.php';

        $funcionario = $_POST['funcionario'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $nomedamae = $_POST['nomedamae'];
        $nomedopai = $_POST['nomedopai'];

        $sql = "insert into tbfuncionario(funcionario,endereco,bairro,cidade,uf,nomedamae,nomedopai) values ('$funcionario','$endereco','$bairro','$cidade','$uf','$nomedamae','$nomedopai')";

        $query = mysqli_query($conn,$sql);

        echo  "Dados cadastrados com sucesso!";

    }else{
        echo 'Não foi possível cadastrar!';
    }

?>
<a href="../index.php">Voltar</a>