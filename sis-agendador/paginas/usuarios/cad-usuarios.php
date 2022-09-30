<header>
    <h3>Cadastro de Usuario</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-usuarios" method="post">
    <div class="mb-3 col-3">
        <label class="form-label" for="nomeUsuarios">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" type="text" name="nomeUsuario" required>
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="telUsuarios">Telefone</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-telefone-fill"></i></span>
            <input class="form-control" type="text" name="telUsuario" required>
        </div>
    </div>

    <div class="mb-3 col-3">
        <input class="btn btn-success" type="submit" value="Cadastrar" name="btnAdicionar">
    </div>
    </form>

    
</div>