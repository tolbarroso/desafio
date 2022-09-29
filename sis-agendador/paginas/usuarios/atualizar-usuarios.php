<header>
    <h3>Atualizar Usuario</h3>
    </header>
    
    <?php
    $idUsuarios = mysqli_real_escape_string($conexao,$_POST["idUsuarios"]);
    $nomeUsuarios = mysqli_real_escape_string($conexao,$_POST["nomeUsuarios"]);
    $telUsuarios = mysqli_real_escape_string($conexao,$_POST["telUsuarios"]);
    $sql = "UPDATE tbusuarios SET
    nomeUsuarios = '{$nomeUsuarios}',
    telUsuarios = '{$telUsuarios}'
    WHERE idUsuarios = '{$idUsuarios}'
    ";

        $rs = mysqli_query($conexao,$sql) or die("ERRO AO EXECUTAR A CONSULTA" . mysqli_error($conexao));

        echo "O registro foi atualizado com sucesso!"

    ?>