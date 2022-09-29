<header>
    <h3>Excluir Usuario</h3>
</header>
<?php
    $idUsuarios = mysqli_real_escape_string($conexao,$_GET["idUsuarios"]);
    $sql = "DELETE FROM tbusuarios WHERE idUsuarios= '{$idUsuarios}'";

    mysqli_query($conexao,$sql) or die("ERRO AO EXCLUIR O REGISTRO" . mysqli_error($conexao));
    echo "Registro excluído com sucesso!";
?>