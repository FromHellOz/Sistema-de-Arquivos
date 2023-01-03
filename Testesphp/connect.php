<?php

$login = $_POST['user'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$server = 'localhost';
$usuario = 'root';
$senhadb = '';
$database = 'prontuario';

$conninfo = mysqli_connect($server,$usuario,$senhadb,$database);

if($conninfo){
    echo"Conectado";
}else{
    die("Error" . mysqli_connect_error());
}

?>
