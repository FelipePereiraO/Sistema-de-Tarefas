<?php
$servidor="localhost";
$usuario = "root";
$senha = "";
$banco = "sistema";
$con = mysqli_connect($servidor,$usuario,$senha,$banco);
if(mysqli_connect_errno()){
    echo "Falha na Conexão com o MySQL" . mysqli_connect_error();
}
mysqli_select_db($con,$banco);
?>