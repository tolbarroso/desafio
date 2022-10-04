<?php
include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo-padrao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Sistema Agenda Eletrônica</title>

</head>
<body>
    <header class="bg-dark">
        <div class="container"> 
        <h1>Agenda Eletrônica</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="#" class="navbar-brand"></a>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="index.php?menuop=home">Home</a></li>
                <li class="nav-item"><a href="index.php?menuop=usuarios">Usuários</a></li>
                <li class="nav-item"><a href="index.php?menuop=atividades">Atividades</a></li>
                <li class="nav-item"><a href="index.php?menuop=calendario">Calendario</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <main>
        <div class="conteiner">
    <?php
        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
        switch ($menuop) {
            case 'home':
                include("paginas/home/home.php");
                break;

            case 'login':
                include("paginas/home/login.php");
                break;

            case 'usuarios':
                include("paginas/usuarios/usuarios.php");
                break;

            case 'cad-usuarios':
                include("paginas/usuarios/cad-usuarios.php");
                break;

            case 'inserir-usuarios':
                include("paginas/usuarios/inserir-usuarios.php");
                break;

            case 'editar-usuarios':
                include("paginas/usuarios/editar-usuarios.php");
                break;

            case 'atualizar-usuarios':
                include("paginas/usuarios/atualizar-usuarios.php");
                break;
            
            case 'excluir-usuarios':
                include("paginas/usuarios/excluir-usuarios.php");
                break;

            case 'atividades':
                include("paginas/atividades/atividades.php");
                break;

            case 'cad-atividades':
                include("paginas/atividades/cad-atividades.php");
                break;

            case 'inserir-atividades':
                include("paginas/atividades/inserir-atividades.php");
                break;
    
            case 'editar-atividades':
                include("paginas/atividades/editar-atividades.php");
                break;
    
            case 'atualizar-atividades':
                include("paginas/atividades/atualizar-atividades.php");
                break;
                
            case 'excluir-atividades':
                include("paginas/atividades/excluir-atividades.php");
                break;

            default:
                include("paginas/home/home.php");
                break;
        }
    ?>
    </div>
    </main>
    <footer class="container-fluid bg-dark text-light">
        <div class="text-center">Sistema Agendador</div>
    </footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/upload.js"></script>
    <script src="./js/javascript-agendador.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="./js/validation.js"></script>
</body>
</html>