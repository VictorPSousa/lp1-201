<link rel="stylesheet" href="../css/estilo.css" />
<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data_nasc = $_POST["data_nasc"];
    $cartao = $_POST["cartao"];
?>
<div id="centro">
    <p>Nome: <?= $nome; ?></p>
    <p>E-Mail: <?= $email; ?></p>
    <p>Data de nascimento: <?= $data_nasc; ?></p>
    <?php
        switch ($cartao) {
            case '1':
                echo 'Banco: Itaú';
                break;
            case '2':
                echo 'Banco: Nubank';
                break;
            case '3':
                echo 'Banco: Inter';
                break;
            default:
                echo 'Valor inválido';
                break;
        }
    ?>
</div>