<?php


if(isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_pass'])){
    $user = $_POST['user_name'];
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];


    include_once("./classes/db.php");

    $db = DB::connect();

    $com = "insert into usuarios values (default, '". $user ."', '". $email ."', '". $pass ."');";

    $db->query($com);
    header('location: /');
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./inscricao.css">
    <title>Inscrever-se</title>
</head>
<body>
    <body style="background: url(./img/fundo.png); background-size: cover; height: 100vh; background-position: bottom;"></body>

    <div class="inscreva_container">
        <div class="create">
            <h1>Create Account</h1>
        </div>

        <div class="form_2">
            <form method="post" action="./inscricao.php">
                <p>Name</p>
                <input name="user_name" type="text" placeholder="Coloque seu Nome" required>
                <p>Username</p>
                <input name="user_email" type="text" placeholder="Coloque seu e-mail" required>
                <p>Password</p>
                <div class="password-input">
                    <input name="user_pass" type="password" id="passwordInput" placeholder="Coloque sua senha" required>
                    <button type="button" id="showPasswordButton" onclick="togglePasswordVisibility()"></button>
                </div>
                <div class="inscreva">

                    <p>Já tem uma conta? <a href="./index.php" class="link-login">Login</a> </p>        
    
                </div>
                <br><br><br><br>
                <button type="submit">Criar &rarr;</button>
            </form>
        </div>
        
    </div>

    <script src="./mostrarsenha.js"></script>
</body>
</html>
