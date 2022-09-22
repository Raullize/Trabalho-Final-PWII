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
    <title>Cadastrar</title>
</head>

<body>
    <main class="box">
        <div>
            <form action="registrationBack.php" method="post">
                <fieldset>
                    <legend><b>Registro</b></legend>
                    <br><br>

                    <div class="inputBox">
                        <input class="inputUser" type="text" name="name" required>
                        <label for="name" class="labelInput">Nome</label>
                    </div>
                    <br><br>


                    <div class="inputBox">
                        <input class="inputUser" type="text" name="user" required>
                        <label for="user" class="labelInput">Usuário</label>
                    </div>
                    <br><br>


                    <div class="inputBox">
                        <input class="inputUser" type="password" name="password" required>
                        <label for="password" class="labelInput">Senha</label>
                    </div>
                    <br><br>

                    <input type="submit" name="submit" id="submit" value="Registrar">
                  
                </fieldset>
            </form>
        </div>
    </main>
</body>

</html>