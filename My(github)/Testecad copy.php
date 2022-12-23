<?php
ini_set('display_error',1);
ini_set('display_startup_errors',1); error_reporting(E_ALL);
//exeplo pra não rodar o código sem necessida
if((isset($_POST['user']))&&(!empty($_POST['user']))){
//verificar a conexão
$conexao = mssql_connect('10.0.0.89','sa','l3it3@1000');
mssql_select_db("prontuario",$conexao)
or die('Erro na conexão');

$user = $_POST['user'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$matricula = $_POST['matricula'];

$string_sql = "INSERT INTO usuarios(user,cpf,senha,matricula) VALUES ('{$user}','{$cpf}','{$senha}','{$matricula}')";
$insert_member_res = mssql_query($string_sql,$conexao);//realiza a consulta

if(mssql_rows_affected($conexao)>0){//verifica se alguma linha fpi afetada, nesse caso se alguma linha foi inserida
    echo "<p>Usuário registrado";
    echo '<a href=""index.html>Fazer Login?</a>';
}else {
    echo "Não foi possível inserir banco de dados";
}
mssql_close($conexao);//fechar conexão
}
?>


<!DOCTYPE html>
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
                <a  class="link" href="index.html">
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
</body>
</html>