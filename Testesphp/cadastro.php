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
            <form method="POST" action="connect.php" id="formulario" name="formulario" >
            <h1>Cadastre-se</h1>
            
            <div class="label-float">

                <input type="text" placeholder="" id="user" name="user" required>
                <label for="user">Nome Completo:</label>

            </div>
            <div class="label-float">

                <input type="text" placeholder="" id="email" name="email" required>
                <label for="">Email:</label>

            </div>
            <div class="label-float">

                <input type="number" placeholder="" id="cpf" name="cpf" required>
                <label for="">CPF:</label>

            </div>
            <div class="label-float">
                <div id="input">
                    <input type="password" placeholder="" id="senha" name="senha" value="" required maxlength="16">
                    <label for="senha">Senha</label>
                    <img src="imagens/Open.png" id="Open"  width="20X20px"><br>
            </div>
            </div>
            
            
           
            

            <div class="label-float">

                <input type="number" placeholder="" id="matricula" name="matricula" required>
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

<?php

if(isset($POST["user"]) ){

    $id = 0;

    $login = $POST['user'];
    $cpf = $POST['cpf'];
    $matricula = $POST['matricula'];
    $email = $POST['email'];
    $senha = MD5($POST['senha']);

    $novouser = new cadastro($login,$cpf,$matricula,$email,$senha);
    $novouser->cadastroUser();
}

?>

</html>