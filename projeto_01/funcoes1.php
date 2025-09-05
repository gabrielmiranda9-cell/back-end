<?php
function conecta($usuario, $senha) {
    if ($usuario === "admin" && $senha === "1234") {
        header("location: painel.php");
        exit;
    } else {
        // codifica a mensagem para evitar problemas com acentuação 
        $msg = urldecode("usuario ou senha invalidos!");
        header("location: index.php?msg=$msg");
        exit;
    }
}
?>