<header>
    <h3>Cadastro de atividade</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-atividades" method="post" novalidate>
    <div class="mb-3 col-3">
        <label class="form-label" for="nomeAtividades">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" type="text" name="nomeAtividades" required>
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="descricaoAtividades">Descrição</label>
        <div class="input-group">
            <span class="input-group-text"></span>
            <input class="form-control" type="text" name="descricaoAtividades" required>
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="statusAtividades">Status</label>
        <div class="input-group">
            <span class="input-group-text"></span>
            <select name="statusAtividades" id="statusAtividades" required>
            <option selected value="">Selecione o status atual da atividade</option>
            <option value="Pendente">Pendente</option>
            <option value="Concluída">Concluída</option>
            <option value="Cancelada">Cancelada</option>
        </select>
        </div>
    </div>

    <div class="mb-3 col-3">
        <label class="form-label" for="dataAtividade">Data</label>
        <div class="input-group">
            <span class="input-group-text"></span>
            <input class="form-control" type="date" name="dataAtividade" required>
        </div>
    </div>

    <div class="mb-3 col-3">
        <input class="btn btn-warning" type="submit" value="Cadastrar" name="btnAdicionar">
    </div>
    </form>    
</div>