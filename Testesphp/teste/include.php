<?php

include 'test.php';

$login = $_POST['user'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$insert = "INSERT INTO userdados VALUES";

$insert .= "('$login', '$senha', '$cpf', '$matricula', '$email')";

if($connection->$query($sql) == TRUE){
    echo"<script language='javascript' type='text/javascript'>
    console.log('Usuário Cadastrado com sucesso.)window,location.href=
    'cadastro.html';</script>";
} else {
    echo"Erro:".$insert."<br>".$connect->connect_error;
}

$connect->close();

?>