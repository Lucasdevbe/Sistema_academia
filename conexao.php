<?php

    $server_host = "localhost"; //local do DB
    $server_user = "root";
    $server_password = "";
    $database_name = "sistema_academia";

    //Declarando uma variavel para receber a conexao com o BD
    //A função mysqli_connect necessita de 4 parametros na sequencia a seguir
    $conexao = mysqli_connect($server_host,$server_user,$server_password,$database_name);