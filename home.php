<?php
    include_once("conected.php");
    $sql = "SELECT * FROM tarefas";
    $result_tarefa = mysqli_query($con,$sql);
    $sql = "SELECT * FROM realizadas";
    $result_realizada = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script  src = "https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js" > </script>
</head>
<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="navbar-brand">SISTEMA DE TAREFAS</h1>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="home.php">Lista de Tarefas &nbsp</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="tarefas.php">Cadastrar Nova Tarefa &nbsp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div id="div1" class="col-6">
        <h1>Tarefas Pendentes</h1>
        <table class="table">
            <tr id="titulo">
                <td scope="col">Nome da Tarefa &nbsp &nbsp</td>
                <td scope="col">Data</td>
                <td scope="col">Hora</td>
                <td scope="col">Descricão</td>           
                <td scope="col"></td>
            </tr>
        
            <?php foreach ($result_tarefa as $tarefa){ ?>
                <tr class="shadow-none p-3 mb-5 bg-light rounded" id="div">
                    <td><?= $tarefa['titulo']?>&nbsp</td> 
                    <td><?= date("d/m/Y", strtotime($tarefa['data']))?>&nbsp &nbsp</td>
                    <td><?= $tarefa['hora']?>&nbsp &nbsp</td>
                    <td><?= $tarefa['descricao']?>&nbsp</td>
                    <td><a href="deletar.php?cod=<?= $tarefa['cod']?>"><button class="btn btn-danger"><ion-icon name="trash"></ion-icon></button></a></td>
                    <td><a href="realizadas.php?cod=<?= $tarefa['cod']?>"><button class="btn btn-success"><ion-icon name="checkmark"></ion-icon></button></a>
                </tr>
            <?php } ?> 
        </table>             
    </div>
    <div id="div2" class="col-6">
        <h1>Tarefas Realizadas</h1>
        <table class="table">
            <tr id="titulo">
                <td scope="col">Nome da Tarefa &nbsp &nbsp</td>
                <td scope="col">Data</td>
                <td scope="col">Hora</td>
                <td scope="col">Descricão</td>           
                <td scope="col"></td>
            </tr>
            <?php foreach ($result_realizada as $realizada){ ?>
                <tr class="shadow-none p-3 mb-5 bg-light rounded" id="div">
                    <td><?= $realizada['titulo']?>&nbsp</td> 
                    <td><?= date("d/m/Y", strtotime($realizada['data']))?>&nbsp &nbsp</td>
                    <td><?= $realizada['hora']?>&nbsp &nbsp</td>
                    <td><?= $realizada['descricao']?>&nbsp</td>
                    <td><a href="deletar.php?cod=<?= $realizada['cod']?>"><button class="btn btn-danger"><ion-icon name="trash"></ion-icon></button></a></td>
                </tr>
            <?php } ?>              
        </table>    
    </div>
</body>
</html>