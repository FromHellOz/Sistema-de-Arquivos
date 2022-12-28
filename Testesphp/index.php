
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de Login para acesso de informações">
    <link rel="stylesheet" href="visual.css" type="text/css">
    <script type="text/javascript" src="js/login.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <title>Entrar</title>
</head>
<body>
    <?php

    $host = '10.0.0.89';
    $porta = '8092';
    $user = 'sa';
    $senha = 'l3it3@1000';
    $database = 'prontuario';

    $server = $porta !== '8092' && is_string($porta) ? $host .= ", $porta":$host;

    $conninfo = array("Database"=>$database, "UID"=>$user, "PWD"=>$senha);
    $linkado = sqlsrv_connect($server,$conninfo); 

    /*if($linkado){
        echo "Sucesso: Conexão com Banco de Dados estabelecida" . PHP_EOL;

    }else{
        echo "Erro: Falha ao se conectar com o banco de dados" . PHP_EOL;

    }*/
    ?>
    <a class="site-title">
        <img src="imagens/brasao.png">
      </a>
    <section>
   
        <div class="container">
        <form method="post">
                <div class="card">
                    <form id= "form">
                      <h1 class="login">Entrar</h1>
                      <div class="label-float">

                        <input type="text" placeholder="" id="user" required maxlength="55">
                        <label for="user">Usuário</label>

                    </div>
                    <div class="label-float">
                        <div id="input">
                        <input type="password" placeholder="" id="senha" value="" required maxlength="16">
                        <label for="senha">Senha</label>
                        <img src="imagens/Open.png" id="Open"  width="20X20px"><br>
                    </div>
                    <script>
                        let input = document.querySelector('#input input');
                        let img = document.querySelector('#input img');
                        img.addEventListener('click', function () {
                        input.type = input.type == 'text' ? 'password' : 'text';
                        });
                    </script>
                    </div>
                    <div class="center">
                        <button class="botao" onclick="entrar()">Entrar</button>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <li class="redirecionar">
                    <span class="cad">
                        Não tem uma Conta?
                    </span>
                    <a  class="link" href="Testecad.php">
                        Cadastre-se!
                    </a>
                    </li>
                    </form>
                </div>
            </form>
        </div>
    </section> 
    <footer class="site-footer">
        <div >
   
    </footer>   
</body>
</html>
