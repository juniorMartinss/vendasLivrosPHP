<?php

    namespace PHP\Modelo\Conta;

    session_start();

    if (isset($_POST['username']) && isset($_POST['passord'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Aqui você pode adicionar o usuário e a senha que deseja permitir
        if ($username == 'senac' && password_verify($password, 'sen@c1234')) {
            $_SESSION['username'] = $username;
            header('Location: protected.php');
            exit;
        } else {
            echo 'Login ou Senha inválido';
        }
    }//tentar fazer 
?>
<form method="post">
    <label for="username">Login:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Login">
</form>
