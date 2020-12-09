<?php

include_once "conexao.php";
$apelido = $_POST['apelido'];
$nome = $_POST['nome'];

if($nome != null){
    $image = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));

    $query = "INSERT INTO `tbcliente` (`nome`, `apelido`, `foto`) VALUES ('$nome', '$apelido', '$image')";
    $qry = mysqli_query($conn, $query);
    echo "<script>
                alert('Dados cadastrados com sucesso!');
                window.location.href = '../exibirfigura.php?codigo=-1';
            </script>";
}else{
    echo "<script>
            alert('Você não realizou o upload de forma satisfatória!');
            window.location.href = '../menuuser.php';
        </script>";
}

?>