<header>
    <h3><i class="bi bi-list-task"></i>Atividades</h3>
</header>

<div>
    <a class="btn btn-outline-secundary mb-2" href="index.php?menuop=cad-atividades"><i class="bi bi-list-task"></i>Nova Atividade</a>
</div>
<div>
    <form action="index.php?menuop=atividades" method="post">
    <div class="input-group">
            <input class="form-control" type="text" name="txt_pesquisa" value="<?=$txt_pesquisa?>">
            <button class="btn btn-outline-success btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar</button>
        </div>
    </form>
</div>
<div class="tabela">
<table class="table table-dark table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Data</th>
            <th>Hora de Início</th>
            <th>Hora de Conclusão</th>
            <th>Edição</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $quantidade = 10;

        $pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;

        $inicio = ($quantidade * $pagina) - $quantidade;

        $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
        $sql = "SELECT 
        idAtividades,
        upper(nomeAtividades) AS nomeAtividades,
        upper(descricaoAtividades) AS descricaoAtividades,
        statusAtividades,
        DATE_FORMAT(dataAtividade, '%d/%m/%Y') AS dataAtividade,
        horaInicio,
        horaFim
        FROM tbatividades 
        WHERE 
        idAtividades= '{$txt_pesquisa}' or 
        nomeAtividades LIKE '%{$txt_pesquisa}%'
        DATE_FORMAT(dataAtividade, '%d/%m/%Y') LIKE '%{$txt_pesquisa}%'
        ORDER BY statusAtividades, dataAtividade 
        LIMIT $inicio, $quantidade
        ";
        $rs = mysql_query($conexao,$sql) or die("ERRO AO EXECUTAR A CONSULTA". mysql_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {
            
        ?>
        <tr>
            <td>
                <a class="btn btn-secondary btn-sm" href="index.php?menuop=atividades&pagina=<?=$pagina?>&idAtividades=<?=$dados['idAtividades']?>&statusAtividades=<?=$dados['statusAtividades']?>" >
                    <?php
                        if($dados['statusAtividades']==0){
                            echo '<i class="bi bi-square"></i>';
                        }else{
                            echo '<i class="bi bi-check-square"></i>';
                        }
                    ?>
                </a>   
            </td>
            <td><?=$dados["idAtividades"] ?></td>
            <td class="text-nowrap"><?=$dados["nomeAtividades"] ?></td>
            <td class="text-nowrap"><?=$dados["descricaoAtividades"] ?></td>
            <td class="text-nowrap"><?=$dados["statusAtividades"] ?></td>
            <td class="text-nowrap"><?=$dados["dataAtividade"] ?></td>
            <td class="text-center"><a class="btn btn-butline-warning btn-sm" href="index.php?menuop=editar-atividades&idAtividades=<?=$dados[" idAtividades"] ?>"><i class="bi bi-pencil-square"></i></a> </td>
            <td class="text-center"><a class="btn btn-butline-danger btn-sm" href="index.php?menuop=excluir-atividades&idAtividades=<?=$dados[" idAtividades"] ?>"><i class="bi bi-trash-fill"></i></a> </td>

        </tr>
        <?php  
        }

        ?>
    </tbody>
</table>
</div>

<ul class="pagination justify-content-center">
    <?php
    $sqlTotal = "SELECT idAtividades FROM tbatividades";
    $sqrTotal = mysqli_query($conexao,$sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($sqrTotal);
    $totalPagina = ceil($numTotal/$quantidade);

    echo "<li class='page-item'><span class='page-link'>Total de Registros:". $numTotal ." </span></li>";
    echo "<li class='page-item'><a class='page-link' href="?menuop=atividades&pagina=1">Primeira Pagina</a> </li>";

    if ($pagina>6) {
        ?>
        <li class='page-item'><a class='page-link' href="?menuop=atividades&pagina=<?php echo $pagina-1 ?>"><<<</a></li>
        <?php
    }

    for ($i=1;$i<=$totalPagina;$i++){
        if($i > ($pagina-5) && $i < ($pagina+5)){
            if ($i == $pagina) {
                echo "<li class='page-item active'><a class='page-link'>$i</span></li>";
            } else {
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=atividades&pagina={$i}\"> {$i} </a></li>";
            }
        }
    }

    if ($pagina<($totalPagina-5)) {
        ?>
        <li class='page-item'><a class='page-link' href="?menuop=atividades&pagina=<?php echo $pagina+1 ?>">>></a></li>
        <?php
    }

    echo "<li class='page-item'><a class='page-link' href=\"?menuop=atividades&pagina=$totalPagina\">Ultima Pagina</a></li>";
?>
</ul>