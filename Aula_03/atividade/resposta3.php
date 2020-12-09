<?php
    $estado = $_GET["estado"];

    if ($estado == 1) {
        echo 'A capital de São Paulo é São Paulo';
    }elseif($estado == 2) {
        echo 'A capital do Rio de Janeiro é o Rio de Janeiro';
    }else {
        echo 'A capital do Amazonas é Manaus';
    }
?>