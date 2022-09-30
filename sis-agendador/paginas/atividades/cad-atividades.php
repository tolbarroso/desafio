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
        <label class="form-label" for="statusAtividades">Status</label>
        <div class="input-group">
            <span class="input-group-text"></span>
            <select name="statusAtividades" id="statusAtividades">
            <option <?php echo ($dados['statusAtividades']=='')?'selected':'' ?> value="">Selecione o status atual da atividade</option>
            <option <?php echo ($dados['statusAtividades']=='Pendente')?'selected':'' ?> value="Pendente">Pendente</option>
            <option <?php echo ($dados['statusAtividades']=='Concluída')?'selected':'' ?> value="Concluída">Concluída</option>
            <option <?php echo ($dados['statusAtividades']=='Cancelada')?'selected':'' ?> value="Cancelada">Cancelada</option>
        </select>
        </div>
    </div>

    <div class="mb-3 col-3">
        <input class="btn btn-success" type="submit" value="Cadastrar" name="btnAdicionar">
    </div>
    </form>

    
</div>