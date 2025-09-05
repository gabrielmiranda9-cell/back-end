<?php
$disciplina = $_POST['disciplina'];
$nota = floatval($_POST['nota']);
if ($nota >= 7) {
    $status = "Aprovado";
} elseif ($nota >= 5 && $nota < 7) {
    $status = "Recuperação";
} else {
    $status = "Reprovado";
}
echo "<h2>Resultado</h2>";
echo "Disciplina: <b>$disciplina</b><br>";
echo "Nota: <b>$nota</b><br>";
echo "Situação: <b>$status</b>";
?>