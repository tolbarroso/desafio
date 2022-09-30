<?php
    $idUsuarios = $_GET["idUsuarios"]

    $sql = "SELECT * FROM tbusuarios WHERE idUsuarios= {$idUsuarios}";
    $rs = mysqli_query($conexao,$sql) or die("ERRO AO RECUPERAR OS DADOS DO REGISTRO". mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Usuario</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-usuarios" method="post">
    <div class="mb-3 col-3">
        <label class="form-label" for="idUsuarios">ID</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
        <input class="form-control" type="text" name="idUsuarios" value="<?=$dados["idUsuarios"] ?>" readonly>
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="nomeAtividades">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" type="text" name="nomeUsuario" value="<?=$dados["nomeUsuarios"] ?>">
            </div>
        </div>

        <div class="mb-3 col-3">
        <label class="form-label" for="telUsuarios">Telefone</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-telefone-fill"></i></span>
            <input class="form-control" type="text" name="telUsuario" value="<?=$dados["telUsuarios"] ?>">
        </div>
        </div>

        <div class="mb-3 col-3">
            <input class="btn btn-success" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>

    
</div>