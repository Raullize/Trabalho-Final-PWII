<?php
 session_start();
if (isset($_POST['submit'])) {
    
    $team_name = $_POST['name'];
    $contact = $_POST['contact'];
    $modality = $_POST['modality'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    $result = mysqli_query($connection, "INSERT INTO teams(team_name,contact,modality,gender,state,city) 
    VALUES ('$team_name','$contact','$modality','$gender','$state','$city')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../../assets/login.css">
    <title>Formulário</title>
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
                        <div style="text-align: center; color: white;">
                            <b>Olá, <?php echo $_SESSION['name'] ?></b>
                            <a style="color:white" ; href="logout.php">
                                <button class="third"> Logout </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div id="firstImg">
            <figure class="image is-2by1">
                <img src="../../assets/img/navimage.jpg">
            </figure>
        </div>
    </header>

    <main class="box">
        <form action="panelback.php" method="post">
            <fieldset>
                <legend><b>Formulário de Mapeamento</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="teamName" class="inputUser" required>
                    <label for="teamName" class="labelInput">Nome do Time</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="contact" id="contact" class="inputUser" required>
                    <label for="contact" class="labelInput">Contato</label>
                </div>
                <br><br>
                <div>
                    <input name="modality" list="modality">
                    <label for="modality">Modalidade</label>
                    <datalist id="modality">
                        <option>3x3</option>
                        <option>Amador</option>
                        <option>Escolinha</option>
                        <option>Equipes de Base</option>
                        <option>Profissional</option>
                    </datalist>
                </div>
                <p>Categoria:</p>
                <input type="radio" id="female" name="gender" value="Feminino" required>
                <label for="female">Feminino</label>
                <br>
                <input type="radio" id="male" name="gender" value="Masculino" required>
                <label for="male">Masculino</label>
                <br>
                <input type="radio" id="other" name="gender" value="Outro" required>
                <label for="other">Outro</label>
                <br><br>
                <div>
                    <input name="state" list="state">
                    <label for="state">Estado</label>
                    <datalist id="state">
                        <option>Acre - AC</option>
                        <option>Alagoas - AL</option>
                        <option>Amapá - AP</option>
                        <option>Amazonas - AM</option>
                        <option>Bahia - BA</option>
                        <option>Ceará - CE</option>
                        <option>Distrito Federal - DF</option>
                        <option>Espírito Santo - ES</option>
                        <option>Goiás - GO</option>
                        <option>Maranhão - MA</option>
                        <option>Mato Grosso - MT</option>
                        <option>Mato Grosso do Sul - MS</option>
                        <option>Minas Gerais - MG</option>
                        <option>Pará - PA</option>
                        <option>Paraíba - PB</option>
                        <option>Paraná - PR</option>
                        <option>Pernambuco - PE</option>
                        <option>Piauí - PI</option>
                        <option>Rio de Janeiro - RJ</option>
                        <option>Rio Grande do Norte - RN</option>
                        <option>Rio Grande do Sul - RS</option>
                        <option>Rondônia - RO</option>
                        <option>Roraima - RR</option>
                        <option>Santa Catarina - SC</option>
                        <option>São Paulo - SP</option>
                        <option>Sergipe - SE</option>
                        <option>Tocantins - TO</option>
                    </datalist>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="city" id="city" class="inputUser" required>
                    <label for="city" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Inserir Time">
            </fieldset>
        </form>
    </main>
</body>

</html>