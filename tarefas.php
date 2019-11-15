<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CADASTRO DE TAREFAS</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="navbar-brand">SISTEMA DE TAREFAS</h1>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="home.php">Lista de Tarefas &nbsp</a>
                </li>
                <li  class="nav-item active">
                    <a class="nav-link" href="tarefas.php">Cadastrar Nova Tarefa &nbsp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <form id="form2"method="POST" action="sqltarefa.php">
        Titulo:
        <input class="form-control" type="text" name="titulo"/>
        Data:
        <input class="form-control" type="date" name="data"/>
        Hora:
        <input class="form-control" type="time" name="hora"/>
        Descrição:
        <textarea class="form-control" name="descricao" cols="30" rows="10"></textarea><br/>
        <input class="btn btn-secondary" type="submit" value="Adicionar Tarefa"/>
    </form>
</body>
</html>