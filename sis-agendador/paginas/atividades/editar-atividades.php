<?php
    $idUsuarios = $_GET["idAtividades"]

    $sql = "SELECT * FROM tbatividades WHERE idAtividades= {$idAtividades}";
    $rs = mysqli_query($conexao,$sql) or die("ERRO AO RECUPERAR OS DADOS DO REGISTRO". mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Atividade</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-atividades" method="post">
    <div class="mb-3 col-3">
        <label class="form-label" for="idAtividades">ID</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
        <input class="form-control" type="text" name="idAtividades" value="<?=$dados["idAtividades"] ?>" readonly>
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="nomeAtividades">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" type="text" name="nomeAtividades" value="<?=$dados["nomeAtividades"] ?>">
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="descricaoAtividades">Descrição</label>
        <div class="input-group">
            <span class="input-group-text"></span>
            <input class="form-control" type="text" name="descricaoAtividades" value="<?=$dados["descricaoAtividades"] ?>">
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="statusAtividade">Status</label>
        <div class="input-group">
            <span class="input-group-text"></span>
            <select name="statusAtividade" id="statusAtividade" value="<?=$dados["statusAtividades"] ?>">
            <option <?php echo ($dados['statusAtividades']=='')?'selected':'' ?> value="">Selecione o status atual da atividade</option>
            <option <?php echo ($dados['statusAtividades']=='Pendente')?'selected':'' ?> value="Pendente">Pendente</option>
            <option <?php echo ($dados['statusAtividades']=='Concluída')?'selected':'' ?> value="Concluída">Concluída</option>
            <option <?php echo ($dados['statusAtividades']=='Cancelada')?'selected':'' ?> value="Cancelada">Cancelada</option>
        </select>
        </div>
    </div>

    <div class="mb-3 col-3">
    <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
    </div>
    </form>

    
</div>