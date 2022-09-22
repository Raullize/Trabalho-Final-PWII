<?php

include_once('../../source/Boot/config.php');

$sql = "SELECT * FROM teams ORDER BY team_id ASC";

$result = $connection->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Mapeamento</title>
</head>

<body>

    <header>
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="navbar-brand ">
                <a class="navbar-item is-large" href="index.html">
                    <p id="BPT">
                        BPT
                    </p>
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.html">
                        Inicio
                    </a>

                    <a class="navbar-item" href="mapping.php">
                        Mapeamento
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Mais
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                Sobre
                            </a>
                            <a class="navbar-item">
                                Contato
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Reporte algum problema
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-medium is-lght" href="login.php">
                                <strong> Login </strong>
                            </a>
                            <a class="button is-medium is-lght" href="registration.php">
                                <strong> Cadastrar </strong>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <br>
    <br>
    <br>

    <main>
        <div>
            <table class="table is-bordered is-striped is-narrow is-hoverable ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome do Time</th>
                        <th>Contato</th>
                        <th>Categoria</th>
                        <th>Genêro</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['team_id'] . "</td>";
                        echo "<td>" . $user_data['team_name'] . "</td>";
                        echo "<td>" . $user_data['contact'] . "</td>";
                        echo "<td>" . $user_data['modality'] . "</td>";
                        echo "<td>" . $user_data['gender'] . "</td>";
                        echo "<td>" . $user_data['state'] . "</td>";
                        echo "<td>" . $user_data['city'] . "</td>";
                        echo "<tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>