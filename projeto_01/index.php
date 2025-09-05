<form action="login.php" method="post">
    login <br>
    <input type="text" name="usuario"> <br>
    senha <br>
    <input type="password" name="senha"> <br><br>
    <input type="submit" value="entrar">
</form>

<?php
//exibe mensagem de erro, se existir
if (isset($_GET['msg'])) {
    echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "</p";
}
?>