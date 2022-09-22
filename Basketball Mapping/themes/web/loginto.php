<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/login.css">
    <title>Login</title>
</head>

<body>
    <main class="box">
        <div>
            <form action="login.php" method="post">
                <fieldset>
                    <legend><b>Login</b></legend>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="text" name="user" required>
                        <label for="name=" class="labelInput">Nome</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input class="inputUser" type="password" name="password" required>
                        <label for="password" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit" value="Acessar">
                    <br><br>
                    <div>
                        <a href="registration.php" class="register">Registre-se</a>
                    </div>

                    <?php
                    if (isset($_SESSION['unauthenticated'])) :
                    ?>
                        <div>
                            <p>Usuário ou senha inválidos. Tente novamente.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['unauthenticated']);
                    ?>

                </fieldset>
            </form>
        </div>
    </main>
</body>

</html>