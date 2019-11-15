<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEMA DE TAREFAS</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script  src = "https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js" > </script>
</head>
<body>
    <header>
        <h1>SISTEMA DE TAREFAS</h1>
    </header>
    <form id="form1" method="POST">
        <br/>
        <ion-icon name="person"></ion-icon><input class="form-control" name="login" type="text" placeholder="Login"/><br/>
        <ion-icon name="key"></ion-icon><input class="form-control" name="senha" type="password" placeholder="Senha"/><br/>
        
        <?php
        if(isset($_POST["login"])){
            confirm();
        }
        function confirm(){
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            if($login == "admin" and $senha == "admin"){
                header("Location:home.php");
            }else{
                echo "Login ou Senha Incorreta";
            }
        }
        ?><br/>
        <input class="btn btn-dark" type="submit" value="Entrar"/>
    </form>
</body>
</html>