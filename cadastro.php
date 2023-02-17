<?php 
session_start();

?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <a href="cadastro.php">Cadastrar</a> <br>  
    <a href="index.php">Listar</a>

    <h1>Cadastrar Usuário</h1>

    <?php 
        /*Explicação Isset */
        
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
    ?>
    <form action="proc_cad_usuario.php" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome completo:" autofocus required> <br> <br>

        <label >Email:</label>
        <input type="email" name="email" placeholder="Digite o email:" required><br><br>
        <input type="submit">


    </form>

</body>
</html>
