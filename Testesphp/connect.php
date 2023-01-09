<?php
$server = 'localhost';
$usuario = 'root';
$senhadb = '';
$database = 'prontuario';

$conninfo = mysqli_connect($server,$usuario,$senhadb,$database);

if($conninfo){
    echo"Conectado ";
}else{
    die("Error" . mysqli_connect_error());
}

if (!$conninfo) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conninfo);

?>
