<?php

    include_once('conexao.php');

    SESSION_START();
    $login = isset($_POST["login"]) ? strtolower($_POST["login"]) : ""; 
    $senha = isset($_POST["senha"]) ? md5($_POST["senha"]) : "";
    $perfil = isset($_POST["perfil"]) ? strtolower($_POST["perfil"]) : "";

    $log = mysqli_query($conn, "SELECT * FROM tbacesso WHERE usuario = '$login' AND senha = '$senha' AND perfil = '$perfil'") or die(mysqli_error(""));

    $linha = mysqli_fetch_array($log);
    
    if($login == "" || $senha == ""){
        echo "<script>
                alert('Acesso restrito! Efetue o Login.');
                window.location.href = '../';
            </script>";
    }
    
    if($login != $linha["usuario"] && $senha != $linha["senha"]){
        echo "<script>
                alert('Acesso restrito! Efetue o Login.');
                window.location.href = '../';
            </script>";
    }
    
    if($login == $linha["usuario"] && $senha == $linha["senha"] && $perfil == "adm"){
        $_SESSION["usuario"] =  $linha["nomeusuario"];
        $_SESSION["adm"] =  1;
        echo "<script>
                alert('Login realizado com sucesso!');
                window.location.href = '../menu.php';
            </script>";
    }
    if($login == $linha["usuario"] && $senha == $linha["senha"] && $perfil == "user"){
        $_SESSION["usuario"] =  $linha["nomeusuario"];
        echo "<script>
                alert('Login realizado com sucesso!');
                window.location.href = '../menuuser.php';
            </script>";
    }else{
        echo "<script>
                alert('Acesso restrito! Efetue o Login.');
                window.location.href = '../';
            </script>";
    }

?>