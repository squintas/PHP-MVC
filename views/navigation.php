<nav>
    <?php
        // Mudar para logout após o utilizador entrar na sua conta
        if(isset($_SESSION["user_id"])) {

            /* obter o primeiro nome da pessoa separando tudo pelos espaços */
            $name_parts = explode(" ", $_SESSION["user_name"]);


            echo '   
                Olá ' .$name_parts[0]. '!   
                <br>  
                <a href="/access/logout">Efectuar Logout</a>
                <br>
                <a href="/admin">Admin Page</a>
            ';
        }
        else {

            echo '
                <a href="/access/register">Criar Conta</a>
                <a href="/access/login">Efectuar Login</a>
            ';


            
        }
    ?>
</nav>
