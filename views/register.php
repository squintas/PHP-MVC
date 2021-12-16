<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Criar Conta</title>
    </head>
    <body>
        <h1>Criar Conta</h1>
<?php
    if(isset($message)) {
        echo '<p role="alert">' .$message. '</p>';
    }
?>
        <h4>Se já tem uma conta de utilizador, <a href="/access/login">efectue login</a>.</h4>
        <form method="post" action="/access/register">
            <div>
                <label>
                    Nome
                    <input type="text" name="name" required minlength="3" maxlength="60">
                </label>
            </div>
            <div>
                <label>
                    Email
                    <input type="email" name="email" required>
                </label>
            </div>
            <div>
                <label>
                    Password
                    <input type="password" name="password" required minlength="8" maxlength="1000">
                </label>
            </div>
            <div>
                <label>
                    Repetir Password
                    <input type="password" name="repeat_password" required minlength="8" maxlength="1000">
                </label>
            </div>
              
            <div>
                <label>
                    <input type="checkbox" name="agrees" required>
                    Concordo com os termos e condições
                </label>
            </div>
            <div>
                <button type="submit" name="send">Registar</button>
            </div>
        </form>
    </body>
</html>