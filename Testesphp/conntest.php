<?php
//db = database
$servername = '10.0.0.89';
$db = 'prontuario';
$userdb = 'sa';
$senhadb = 'l3it3@1000';
$porta = '8092';
  
$dbarray = array("Database"=>$db,"UID"=>$userdb,"PWD"=>$senhadb);
//$servidor = $porta !== '8092' && is_string($porta) ? $dbhost .= ", $porta":$dbhost;
$servername = 'prontuario';

$conexaodb = mysql_connect($dbarray,$servername);

?>