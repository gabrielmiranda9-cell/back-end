<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>galeria de imagens<h1>
        <a href="upload.php"> enviar nova imagem</a>
        <hr>
        <h2>imagens enviadas:</h2>
<div style="display: flex; flex-wrap; wrap; gap: 10px;">
            <?php
            $pasta = "upload/";
            if (is_dir($pasta)) {
                $arquivos = scandir($pasta);
                foreach ($arquivos as $arquivo) {
                    if ($arquivo != "." && $arquivo != "..") {
                        echo "</div>";

                    }
                }
            } else{
                echo "<p>nenhuma imagem encontrada.</p>";

            }
            ?>
            </div>
</body>
</html>