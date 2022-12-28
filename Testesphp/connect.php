<?php
include 'cadastro.html';

$login = $_POST['user'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$porta = '8092';
$host = '10.0.0.89';
$database = '10.0.0.89';
$conninfo = array("Database"=>'10.0.0.89', "UID"=>'sa', "PWD"=>'l3it3@1000');
$server = $porta !== '8092' && is_string($porta) ? $host .= ", $porta":$host;

$connec = sqlsrv_connect($server,$conninfo);
$db = sqlsrv_connect($database, $conninfo);
$query_select = "SELECT login FROM userdados WHERE login = $login";
$select = sqlsrv_query($query_select,$db);
$array = seqlsrv_fetch_array($select);
$logarray = $array['login'];

if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

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
