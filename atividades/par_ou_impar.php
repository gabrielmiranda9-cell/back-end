<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_POST['num'];

    function parOuImpar($num) {
        if ($num % 2 ==0) {
            return "par";
        } else {
            return "impar";
        }
    }

    
    echo "O número $num é <strong>" . parOuImpar($num) . "</strong";
} else {
    echo "Nenhum valor enviado.";
}
?>