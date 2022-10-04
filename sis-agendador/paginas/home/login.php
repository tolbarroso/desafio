<html>

<header>
    <h3> Login </h3>
</header>

<body>
    <form method="POST" action="index.php?menuop=home.php">
        <label>Login:</label><input type="text" name="login" id="login"><br>
        <label>Senha:</label><input type="password" name="senha" id="senha"><br>
        <input type="submit" value="entrar" id="entrar" name="entrar"><br>
        <a href="index.php?menuop=cad-usuarios.php">Cadastre-se</a>
    </form>
</body>

</html>

<?php
$loginUsuario = $_POST['loginUsuario'];
$entrar = $_POST['entrar'];
$senhaUsuarios = md5($_POST['senhaUsuarios']);
$connect = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('dbsisagendador');
if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM tbusuarios WHERE login = '$loginUsuario' AND senha = '$senhaUsuarios'") or die("erro ao selecionar");
    if (mysql_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos'); window.location.href='index.php?menuop=login.html';</script>";
        die();
    }
    else {
        setcookie("login", $login);
        header("Location: index.php");
    }
}
?>