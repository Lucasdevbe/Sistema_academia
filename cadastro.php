<?php
    //Incluir o arquivo de conexão com o banco de dados
    include "conexao.php";

    //resgatar as informações do formulario enviadas via POST
    
    $nome = $_POST['nome'];
    $dt_nasc = $_POST['dt_nasc'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereço'];
    

    //Criar a string com o comando em SQL 
    $sql = "INSERT INTO pessoa( nome, dt_nascimento, email, senha ,telefone, endereco) VALUES ('$nome', '$dt_nasc', '$email','$senha','$telefone','$endereco');";
    

    //conectar ao banco de dados e executar o comando em sql
    if(mysqli_query($conexao,$sql)){
        header("location: login_aluno.php?senha=$senha");
    
    } else{
        echo "Falha ao realizar o cadastro";
    }