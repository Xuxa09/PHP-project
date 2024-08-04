<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Exercício 4</title>
    <style>
        body {
            font-family: 'Fredoka One', cursive;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="../index.html" class="brand-logo"><img src="../img/pngwing.com.png" style="width: 65px;" alt=""></a>
                <a href="#" class="brand-logo center" style="font-family: 'Fredoka One', cursive;">Exercício 4</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.html"><i class="material-icons">home</i></a></li>
                    <li><a href="../../"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container center">
        <div class="row center">
            <h1>Login</h1>
            <div class="col s12 m8 l8 push-l2 push-m2">
                <form action="ex4.php" method="post">
                    <div class="input-field">
                        <input id="input" type="text" class="validate" name="user">
                        <label for="input" style="font-size: 20px">Usuário</label>
                    </div>
                    <div class="input-field">
                        <input id="input" type="password" name="password">
                        <label for="input" style="font-size: 20px">Senha</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Limpar</button>
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Entrar</button>
                </form>
            </div>
        </div>
        <?php 
            $user = $_POST["user"];
            $password = $_POST["password"];
            if ((strlen($user) > 0) && (strlen($password) > 0))
                if (($user=="unesp")&&($password=="cotec")) {
                    echo "<h2>Seja bem vindo ao Sistema de Ativação</h2>";    
                }
                else {
                    echo "<h2>Usuário ou Senha inválidos!!!</h2>";    
                    echo "<h2>Tente novamente!!!</h2>"; 
                }
            unset($user);
            unset($password);
        ?>
        <div class="divider"></div>
        <footer>
        <ul class="pagination center">
            <li class="waves-effect"><a href="ex3.php"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect"><a href="../index.html"><i class="material-icons">home</i></a></li>
            <li class="waves-effect"><a href="ex1.php">1</a></li>
            <li class="waves-effect"><a href="ex2.php">2</a></li>
            <li class="waves-effect"><a href="ex3.php">3</a></li>
            <li class="active"><a href="ex4.php">4</a></li>
            <li class="waves-effect"><a href="ex5.php">5</a></li>
            <li class="waves-effect"><a href="ex6.php">6</a></li>
            <li class="waves-effect"><a href="ex7.php">7</a></li>
            <li class="waves-effect"><a href="ex8.php">8</a></li>
            <li class="waves-effect"><a href="ex9.php">9</a></li>
            <li class="waves-effect"><a href="ex10.php">10</a></li>
            <li class="waves-effect"><a href="ex5.php"><i class="material-icons">chevron_right</i></a></li>
        </ul>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>