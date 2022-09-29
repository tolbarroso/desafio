<header>
    <h3>Usuarios</h3>   
</header>
<div>
    <a href="index.php?menuop=cad-usuarios">Novo Usuario</a>
</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa" >
        <input type="submit" value="Pesquisar">
    </form>
</div>
<table class="table table-dark table-houver">
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
            <td><?=$dados["nomeUsuarios"] ?></td>
            <td><?=$dados["telUsuarios"] ?></td>
            <td><a href="index.php?menuop=editar-usuarios&idUsuarios=<?=$dados["idUsuarios"] ?>">Editar</a> </td>
            <td><a href="index.php?menuop=excluir-usuarios&idUsuarios=<?=$dados["idUsuarios"] ?>">Excluir</a> </td>

        </tr>
        <?php  
        }

        ?>
    </tbody>
</table>
<br>
<?php
    $sqlTotal = "SELECT idUsuarios FROM tbusuarios";
    $sqrTotal = mysqli_query($conexao,$sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($sqrTotal);
    $totalPagina = ceil($numTotal/$quantidade);

    echo "Total de Registros: $numTotal ";
    echo "<a href="?menuop=usuarios&pagina=1">Primeira Pagina</a>";

    if ($pagina>6) {
        ?>
        <a href="?menuop=usuarios&pagina=<?php echo $pagina-1 ?>"></a>
        <?php
    }

    for ($i=1;$i<=$totalPagina;$i++){
        if ($i == $pagina) {
            echo $i;
        } else {
            echo "<a href=\"?menuop=usuarios&pagina=$i\">$i</a>";
        }

    }

    if ($pagina<($totalPagina-5)) {
        ?>
        <a href="?menuop=usuarios&pagina=<?php echo $pagina+1 ?>"></a>
        <?php
    }

    echo "<a href=\"?menuop=usuarios&pagina=$totalPagina\">Ultima Pagina</a>";
?>