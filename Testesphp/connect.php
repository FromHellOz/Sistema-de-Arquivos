<?php
include 'cadastro.html';

$_POST['user'];
$_POST['cpf'];
$_POST['matricula'];
$_POST['email'];
MD5($_POST['senha']);

$porta = '3306';
$host = 'localhost';
$database = 'prontuario';
$server = $porta !== '3306' && is_string($porta) ? $host .= ", $porta":$host;

$conninfo = mysql_connect('localhost','root','onsw42db', 'prontuario');


$db = mysql_select_db($database);
$query_select = "SELECT login FROM dadosuser WHERE login = $login";
$select = mysql_query($query_select,$db);
$array = mysql_fetch_array($select);
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
    VALUES ($login, $senha, $cpf, $matricula, $email)";
    $insert = sqlsrv_query($query, $connec);

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
