<?php
include 'cadastro.html';

$login = $_POST['user'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$database = 'prontuario';

$conninfo = mysqli_connect('localhost','root','');

$db = mysqli_select_db($conninfo,$database);
$result = mysqli_query($conninfo,"SELECT * FROM dadosuser");
$array = mysqli_fetch_array($conninfo,$result);
$logarray = $array['login'];

if($login == '' || $login = null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo de login deve ser preenchido');window.location.href=
    'cadastro.html';</script>";

}else{
        if($logarray == $login){

    echo"<script language='javascript'type='text/javascript' >
    alert('Esse login já existe');window,location.href=
    'cadastro.html';</script>";
    die();

}else{

    $query = "INSERT INTO userdados (login,senha,cpf,matricula,email) 
    VALUES ('{$login}', {'$senha'}, {'$cpf'}, {'$matricula'}, {'$email'})";
    $insert = mysqli_query($query, $connect); 

    if($insert){ 

        echo"<script language='javascript' type='text/javascript'>
        alert('Usuário Cadastrado com sucesso!');window.location.href=
        'cadastro.html';</script>"
        ;
    }else{

        echo"<script language='javascript' type='text/javascrip'>
        alert('Não foi possível cadastrar esse usuário.');windou.location.href=
        'cadastro.html';</script>";

        }
    }
}
?>
