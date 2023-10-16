<?php

    
    include "conexao.php";
    

    $logsenha =$_POST['senha'];

    $sql_dados_db = "SELECT * FROM pessoa where senha == $logsenha";

    $dados_db = mysqli_query($conexao, $sql_dados_db);

    $dados = mysqli_fetch_array($dados_db);

    if( $logsenha == $dados['senha']){

        header("location:area_aluno.php?nome=$dados[nome]");
        

    }else{

        echo  "<script>alert('Senha incorreta!');</script>";
    }