<header>
    <h3>Cadastro de atividade</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-atividades" method="post">
    <div class="mb-3 col-3">
        <label class="form-label" for="nomeAtividades">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" type="text" name="nomeUsuario">
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="descricaoAtividades">Descrição</label>
        <div class="input-group">
            <span class="input-group-text"></span>
            <input class="form-control" type="text" name="descricaoAtividades">
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="statusAtividade">Status</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
            <select name="statusAtividade" id="statusAtividade">
            <option selected>Selecione o status atual da atividade</option>
            <option value="Pendente"></option>
            <option value="Concluída"></option>
            <option value="Cancelada"></option>
        </select>
        </div>
    </div>

    <div class="mb-3 col-3">
        <input class="btn btn-success" type="submit" value="Cadastrar" name="btnAdicionar">
    </div>
    </form>

    
</div>