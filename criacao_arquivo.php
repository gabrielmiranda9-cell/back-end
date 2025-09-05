<?php
$arquivo = fopen("dados.txt", "w");
fwrite($arquivo, "primeiro linha de texto\n");
fclose($arquivo);
?>

