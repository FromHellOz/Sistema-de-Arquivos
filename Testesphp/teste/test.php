<?php

$connect = mysqli_connect('localhost','root','','prontuario');

mysqli_set_charset($connect, 'utf-8');

if($connect->connect_error){
  die("Falha ao realizar a conexão".$connect->connect_error);
}

?>