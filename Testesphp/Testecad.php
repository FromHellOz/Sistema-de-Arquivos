<?php

 $host = '10.0.0.89';
 $porta = '8092';
 $user = 'sa';
 $senha = 'l3it3@1000';
 $database = 'prontuario';

 $server = $porta !== '8092' && is_string($porta) ? $host .= ", $porta":$host;

$conninfo = array("Database"=>$database, "UID"=>$user, "PWD"=>$senha);
$link = sqlsrv_connect($server,$conninfo); 

/*if($link){
    echo "Sucesso: Conexão com Banco de Dados estabelecida" . PHP_EOL;

}else{
    echo "Erro: Falha ao se conectar com o banco de dados" . PHP_EOL;

}

    $host = '10.0.0.89';
    $user = 'sa';
    $senha = 'l3it3@1000';
    $link = mssql_connect($host, $user, $senha) 
*/

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visualcad.css" type="text/css">
    <script type="text/javascript" src="js/eyelogincad.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <title>Página de Cadastro</title>    
    </head>
    <body>
        
    <a class="site-title">
        <img src="imagens/brasao.png">
      </a>
    <div class="container">
        <div class="card">
            <form action="Testecad.php" method="post">
            <h1>Cadastre-se</h1>
            
            <div class="label-float">

                <input type="text" placeholder="" id="user" required>
                <label for="user">Nome Completo:</label>

            </div>
            <div class="label-float">

                <input type="text" placeholder="" id="email" required>
                <label for="">Email:</label>

            </div>
            <div class="label-float">

                <input type="number" placeholder="" id="cpf" required>
                <label for="">CPF:</label>

            </div>
            <div class="label-float">
                <div id="input">
                    <input type="password" placeholder="" id="senha" value="" required maxlength="16">
                    <label for="senha">Senha</label>
                    <img src="imagens/Open.png" id="Open"  width="20X20px"><br>
            </div>
            </div>
            
            
           
            

            <div class="label-float">

                <input type="number" placeholder="" id="matricula" required>
                <label for="matricula">Matrícula:</label>

            </div>
            <div class="center">
                <button onclick='cadastrar()' class="botao">Cadastrar</button>
            </div>
            <hr>
            <li class="redirecionar">
                <span class="cad">
                    Já tem uma Conta?
                </span>
                <a  class="link" href="index.php">
                    Entre aqui!
                </a>
                </li>

        </div>

    </div>
    <script>
                let input = document.querySelector('#input input');
                let img = document.querySelector('#input img');
                img.addEventListener('click', function () {
                input.type = input.type == 'text' ? 'password' : 'text';
                });
            </script>
    </form>
