<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <title>Sistema Agenda Eletrônica</title>

</head>
<body>
    <header class="bg-dark">
        <div class="container"> 
        <h1>Agenda Eletrônica</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navabar-brand" href="#">

            </a>
            <ul>
                <li class="nav-item active"><a href="index.php?menuop=home">Home</a></li>
                <li class="nav-item"><a href="index.php?menuop=usuarios">Usuários</a></li>
                <li class="nav-item"><a href="index.php?menuop=atividades">Atividades</a></li>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>