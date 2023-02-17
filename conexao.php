<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "empresa";


// A linha faz a conexão com o banco seguindo a sequencia das variaveis acima - 
$conn = my_sqli_connect($servidor, $usuario, $senha, $dbname);


/*
    Passo 1 - Criar o banco de dados no PHPMyAdmin

    Passo 2 - Linkar  o banco com as páginas 

    Passo 3 - Criar a tela para pegar os dados com HTML 
       
    Passo 4 - Tela de processamento

    ----- TAGS NOVAS

    ! - insset e Unset 
    ! - filter_inout 
    ! - FILTER_SANITIZE_EMAIL e FILTER_SANITIZE_STRING
    ! - NOW() 
    ! - my_sqli_query
    ! - my_sqli_insert_id 
    ! - include_once
*/
?>