<?php 
session_start();

include_once('conexao.php');


// Pegar as tags do html porém sem as tags html 
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 

$insert = "INSERT INTO empresa (nome, email, criado) values ('$nome', '$email', NOW())";
$resultado_usuario = my_sqli_query($conn, $insert); 

if (my_sqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p>Usuário criado com sucesso.</p>";
    header{"Location: index.php"};

} else {
    $_SESSION['msg'] = "<p>Usuário não foi cadastrado.</p>";
    header{"Location: cadastro.php"};
}

?>