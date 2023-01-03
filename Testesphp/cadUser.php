<?php

class novouser{

    private $user;
    private $senha;
    private $cpf;
    private $email;
    private $matricula;

    function __construct($user,$senha,$cpf,$email,$matricula){

        $this->user = $user;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->matricula = $matricula;
    }

    function setId(){
        $this->id = $id; 
    }
    function setUser(){
        $this->user = $user; 
    }
    function setSenha(){
        $this->id = $id; 
    }
    function setEmail(){
        $this->email = $email; 
    }
    function setCpf(){
        $this->cpf = $cpf; 
    }
    function setMatricula(){
        $this->matricula = $matricula; 
    }

    function getId(){
        return  $this->id = $id;
   }
   function getUser(){
    return  $this->user = $user;
    }
    function geSenha(){
        return  $this->senha = $senha;
    }
    function getEmail(){
        return  $this->email = $email;
    }
    function getCpf(){
        return  $this->cpf = $cpf;
    }
    function getMatricula(){
        return  $this->matricula = $matricula;
    }
    
    function cadastroUser(){

        include 'conntest.php';
        {
        $sql = "INSERT INTO usuarios (id,nome,senha,cpf,email,matricula)
        VALUES ('$id','$user','$senha','$cpf','$email','$matricula')";

        $query = mysqli_query($link,$sql) or die(mysqli_error($link));
        echo'Erro ao adicionar à DB';

        echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='cadastro.html'</script>";
    }
    }
}

    function buscarUser($cadBusca){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=prontuario', 'root', '');
        }
        catch
    }

?>
