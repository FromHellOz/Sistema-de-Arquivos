<?php
$server = 'localhost';
$usuario = 'root';
$senhadb = '';
$database = 'prontuario';

$link = mysqli_connect($server,$usuario,$senhadb,$database);

if(!$link){
  die("Erro ao se conectar" . mysqli_error());
} echo"Conectado";

?>