<?php

    
    include "conexao.php";
    

    $logsenha =$_POST['senha'];

    $sql_dados_db = "SELECT * FROM tb_aluno";

    $dados_db = mysqli_query($conexao, $sql_dados_db);

    $dados = mysqli_fetch_array($dados_db);

    if( $dados['senha'] == $logsenha){

        header("location: area_aluno.php?senha=$dados[senha]");
        

    }else{

        echo  "<script>alert('Senha incorreta!');</script>";
    }