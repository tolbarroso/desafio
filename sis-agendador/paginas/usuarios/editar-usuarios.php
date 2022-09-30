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
    <div>
        <label for="idUsuarios">ID</label>
        <input type="text" name="idUsuarios" value="<?=$dados["idUsuarios"] ?>">
    </div>

    <div>
        <label for="nomeUsuarios">Nome</label>
        <input type="text" name="nomeUsuarios" value="<?=$dados["nomeUsuarios"] ?>">
    </div>

    <div>
        <label for="telUsuarios">Telefone</label>
        <input type="text" name="telUsuarios" value="<?=$dados["telUsuarios"] ?>">
    </div>

    <div>
        <input type="submit" value="Atualizar" name="btnAtualizar">
    </div>
    </form>

    
</div>