<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'portfolio_form';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // }
    // else{
    //    echo "Conexão efetuada com sucesso.";
    // }

?>