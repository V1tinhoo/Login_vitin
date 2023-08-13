<?php


if(isset($_POST['user_email']) && isset($_POST['user_pass'])){
    echo("<script>console.log('recebido');</script>");
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    include_once("./classes/db.php");

    $com = "select * from usuarios where email='". $email ."' and pass='". $pass ."';";

    $db = DB::connect();
    
    $result = $db->query($com);

    if($result->rowCount() > 0){
        echo("<script>alert('Login efetuado com sucesso!')</script>");
        header('location: /login.html');
    }
    else{
        echo("<script>alert('Senha incorreta!')</script>");
        
    }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilos.css">
    <title>Byter</title>
</head>

<body>

    <body style="background: url(./img/fundo.png); background-size: cover; height: 100vh; background-position: bottom;">
    </body>


    <div class="login-container">
        <div class="login">
            <div class="login_text">

                <h1>LOGIN</h1>
            </div>
            <div class="form">

                <form method="post" action="./index.php">
                    <p>Username</p>
                    <input type="text" name="user_email" placeholder="@gmail.com" required>
                    <p>Password</p>
                    <input type="password" name="user_pass" placeholder="password" required>
                    <label class="remember-me">
                        <br><br>
                        <input type="checkbox">
                        Lembrar de mim? <a href="./site.html" class="link_senha">Esqueceu a senha?</a>
                    </label>
                    <br><br>
                    <button type="submit">Entrar</button>
                </form>

            </div>

            <div class="inscreva">
                <p>Não tem uma conta? <a href="./inscricao.php" class="link-inscreva">Inscrever-se</a> </p>
            </div>



        </div>
        <img src="./img/Login_tela.gif" class="img1" height="500px">
    </div>
</body>

</html>