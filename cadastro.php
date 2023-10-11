<?php
    //Incluir o arquivo de conexão com o banco de dados
    include "conexao.php";

    //resgatar as informações do formulario enviadas via POST
    
    $nome = $_POST['nome'];
    $dt_nasc = $_POST['dt_nasc'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    //Criar a string com o comando em SQL 
    $sql = "INSERT INTO tb_aluno( nome, idade, email, senha) VALUES ('$nome', '$dt_nasc', '$email','$senha');";
    

    //conectar ao banco de dados e executar o comando em sql
    if(mysqli_query($conexao,$sql)){
        header("location: login_aluno.php?senha=$senha");
    
    } else{
        echo "Falha ao realizar o cadastro";
    }