<header>
    <h3>Inserir Usuarios</h3>
    </header>
    
    <?php
    $nomeUsuarios = mysqli_real_escape_string($conexao,$_POST["nomeUsuarios"]);
    $telUsuarios = mysqli_real_escape_string($conexao,$_POST["telUsuarios"]);
    $sql = "INSERT INTO tbusuarios(
        nomeUsuarios,
        telUsuarios)
        VALUES(
            '{$nomeUsuarios}', 
            '{$telUsuarios}'
        )
        ";

        $rs = mysqli_query($conexao,$sql) or die("ERRO AO EXECUTAR A CONSULTA" . mysqli_error($conexao));

        echo "O registro foi inserido com sucesso!"

    ?>