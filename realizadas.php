<?php 
    include_once("conected.php");
    $sql = "INSERT INTO realizadas (titulo, data, hora, descricao) SELECT titulo, data, hora, descricao FROM tarefas";
    $resultado = mysqli_query($con,$sql);
    $cod = $_GET['cod'];
    $sql = "delete from tarefas where cod =  $cod";
    $result_delet = mysqli_query($con,$sql);
if($resultado == true){
    header("Location:home.php");
}else{
    echo ("erro");
}

?>