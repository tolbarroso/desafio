<header>
    <h3>Usuarios</h3>
</header>
<div>
    <a href="index.php?menuop=cad-usuarios">Novo Usuario</a>
</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">

        <button class="btn btn-success btn-sm" type="submit">Pesquisar</button>
    </form>
</div>
<table class="table table-dark table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
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
        idUsuarios,
        upper(nomeUsuarios) AS nomeUsuarios,
        telUsuarios
        FROM tbusuarios 
        WHERE 
        idUsuarios= '{$txt_pesquisa}' or 
        nomeUsuarios LIKE '%{$txt_pesquisa}%'
        ORDER BY nomeUsuarios ASC
        LIMIT $inicio , $quantidade
        ";
        $rs = mysql_query($conexao,$sql) or die("ERRO AO EXECUTAR A CONSULTA". mysql_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {
            
        ?>
        <tr>
            <td><?=$dados["idUsuarios"] ?></td>
            <td class="text-nowrap"><?=$dados["nomeUsuarios"] ?></td>
            <td class="text-nowrap"><?=$dados["telUsuarios"] ?></td>
            <td class="text-center"><a class="btn btn-butline-warning btn-sm" href="index.php?menuop=editar-usuarios&idUsuarios=<?=$dados[" idUsuarios"] ?>"><i class="bi bi-pencil-square"></i></a> </td>
            <td class="text-center"><a class="btn btn-butline-danger btn-sm" href="index.php?menuop=excluir-usuarios&idUsuarios=<?=$dados[" idUsuarios"] ?>"><i class="bi bi-trash-fill"></i></a> </td>

        </tr>
        <?php  
        }

        ?>
    </tbody>
</table>

<ul class="pagination justify-content-center">
    <?php
    $sqlTotal = "SELECT idUsuarios FROM tbusuarios";
    $sqrTotal = mysqli_query($conexao,$sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($sqrTotal);
    $totalPagina = ceil($numTotal/$quantidade);

    echo "<li class='page-item'><span class='page-link'>Total de Registros:". $numTotal ." </span></li>";
    echo "<li class='page-item'><a class='page-link' href="?menuop=usuarios&pagina=1">Primeira Pagina</a> </li>";

    if ($pagina>6) {
        ?>
        <li class='page-item'><a class='page-link' href="?menuop=usuarios&pagina=<?php echo $pagina-1 ?>"><<<</a></li>
        <?php
    }

    for ($i=1;$i<=$totalPagina;$i++){
        if($i > ($pagina-5) && $i < ($pagina+5)){
            if ($i == $pagina) {
                echo "<li class='page-item active'><a class='page-link'>$i</span></li>";
            } else {
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=usuarios&pagina={$i}\"> {$i} </a></li>";
            }
        }
    }

    if ($pagina<($totalPagina-5)) {
        ?>
        <li class='page-item'><a class='page-link' href="?menuop=usuarios&pagina=<?php echo $pagina+1 ?>">>></a></li>
        <?php
    }

    echo "<li class='page-item'><a class='page-link' href=\"?menuop=usuarios&pagina=$totalPagina\">Ultima Pagina</a></li>";
?>
</ul>