<header>
    <h3>Inserir Atividade</h3>
    </header>
    
    <?php
    $nomeAtividades = mysqli_real_escape_string($conexao,$_POST["nomeAtividades"]);
    $descricaoAtividades = mysqli_real_escape_string($conexao,$_POST["descricaoAtividades"]);
    $statusAtividades = mysqli_real_escape_string($conexao,$_POST["statusAtividades"]);
    $dataAtividade = mysqli_real_escape_string($conexao,$_POST["dataAtividade"]);
    $horaInicio = mysqli_real_escape_string($conexao,$_POST["horaInicio"]);
    $horaFim = mysqli_real_escape_string($conexao,$_POST["horaFim"]);
    $sql = "INSERT INTO tbatividades(
        nomeAtividades,
        descricaoAtividades,
        statusAtividades,
        dataAtividade,
        horaInicio,
        horaFim)
        VALUES(
            '{$nomeAtividades}', 
            '{$descricaoAtividades}',
            '{$statusAtividades}',
            '{$dataAtividade}', 
            '{$horaInicio}',
            '{$horaFim}'
        )
        ";

        $rs = mysqli_query($conexao,$sql);

        if($rs){
            ?>
            <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Inserir Atividade</h4>
          <p>Atividade inseria com sucesso.</p>
          <hr>
          <p class="mb-0">
            <a href="?menuop=atividades">Voltar para a lista de atividade.</a>
          </p>
        </div>
            <?php
        }else{
            ?>
               <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Erro</h4>
          <p>A atividade não pode ser inserida.</p>
          <hr>
          <p class="mb-0">
            <a href="?menuop=atividades">Voltar para a lista de atividade.</a>
          </p>
        </div>
            <?php
        }
        ?>