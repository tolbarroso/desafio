<header>
    <h3>Excluir Atividades</h3>
</header>
<?php
    $idAtividades = mysqli_real_escape_string($conexao,$_GET["idAtividades"]);
    $sql = "DELETE FROM tbatividades WHERE idAtividades= '{$idAtividades}'";

    mysqli_query($conexao,$sql) or die("ERRO AO EXCLUIR O REGISTRO" . mysqli_error($conexao));
    echo "Registro excluído com sucesso!";
?>