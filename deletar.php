<?php
    require_once("conected.php");
    $cod = $_GET['cod'];
    $sql = "DELETE FROM tarefas WHERE cod =  $cod";
    $sql = "DELETE FROM realizadas WHERE cod =  $cod";
    $result_delet = mysqli_query($con,$sql);
    if($result_delet == true){
        header("Location:home.php");
    }
?>