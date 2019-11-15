<?php

include_once("conected.php");

$titulo = $_POST["titulo"];
$data = $_POST["data"];
$hora = $_POST["hora"];
$descricao = $_POST["descricao"];

$sql = "INSERT INTO tarefas (titulo, data, hora, descricao) VALUES ('$titulo','$data','$hora','$descricao')";
$resultado = mysqli_query($con,$sql);

if($resultado == true){
    header("Location:home.php");
}else{
    echo("Tarefa Não Adicionada");
    header("Location:home.php");
}
mysqli_close($con)
?>