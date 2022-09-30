<header>
    <h3>Inserir Atividade</h3>
    </header>
    
    <?php
    $nomeAtividades = mysqli_real_escape_string($conexao,$_POST["nomeAtividades"]);
    $descricaoAtividades = mysqli_real_escape_string($conexao,$_POST["descricaoAtividades"]);
    $statusAtividades = mysqli_real_escape_string($conexao,$_POST["statusAtividades"]);
    $sql = "INSERT INTO tbatividades(
        nomeAtividades,
        descricaoAtividades,
        statusAtividades)
        VALUES(
            '{$nomeAtividades}', 
            '{$descricaoAtividades}'
            '{$statusAtividades}'
        )
        ";

        $rs = mysqli_query($conexao,$sql) or die("ERRO AO EXECUTAR A CONSULTA" . mysqli_error($conexao));

        echo "O registro foi inserido com sucesso!"

    ?>