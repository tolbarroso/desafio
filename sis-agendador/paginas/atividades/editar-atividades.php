<?php
    $idUsuarios = $_GET["idAtividades"]

    $sql = "SELECT * FROM tbatividades WHERE idAtividades= {$idAtividades}";
    $rs = mysqli_query($conexao,$sql) or die("ERRO AO RECUPERAR OS DADOS DO REGISTRO". mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Usuario</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-usuarios" method="post">
    <div class="mb-3 col-3">
        <label class="form-label" for="idAtividades">ID</label>
        <div class="input-group">
        <span class="input-group-text"></span>
        <input class="form-control" type="text" name="idAtividades" value="<?=$dados["idAtividades"] ?>">
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="nomeAtividades">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" type="text" name="nomeUsuario" value="<?=$dados["nomeAtividades"] ?>">
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="descricaoAtividades">Descrição</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-telefone-fill"></i></span>
            <input class="form-control" type="text" name="telUsuario" value="<?=$dados["descricaoAtividades"] ?>">
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="statusAtividade">Status</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
            <select name="statusAtividade" id="statusAtividade" value="<?=$dados["statusAtividades"] ?>">
            <option selected>Selecione o status atual da atividade</option>
            <option value="Pendente"></option>
            <option value="Concluída"></option>
            <option value="Cancelada"></option>
        </select>
        </div>
    </div>

    <div class="mb-3 col-3">
    <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
    </div>
    </form>

    
</div>