<?php
file_put_contents("log.txt",
"usuario acessou em " .
date("d/m/Y H:i:s") . 
"\n", FILE_APPEND);
?>
