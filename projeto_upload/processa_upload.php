<?php
$pastadedestino="upload/";

if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"]==0){
    $nomearquivo=basename($_FILES["arquivo"]["name"]);
    $caminhodestino=$pastadedestino . $nomearquivo;

    //verifica se é uma imagem
    $tipoarquivo= strtolower(pathinfo($caminhodestino, PATHINFO_EXTENSION));
    $tipospermitidos=["jpg","jpeg","png","gif"];

    if (in_array($tipoarquivo, $tipospermitidos)){
        if(move_uploaded_file($_FILES["arquivo"]["tmp_name"],$caminhodestino)){
            echo "upload realizado com sucesso! <br>";
            echo "<a href='index.php'>ver galeria</a>";
        }else {
            echo "erro ao salvar o arquivo.";
        }
    }else {
        echo "erro. enviar apenas imagem(jpg,png,gif)";
    }
}else{
    echo "nenhum arquivo enviado.";
}
?>