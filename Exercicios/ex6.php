<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Exercício 6</title>
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
                <a href="#" class="brand-logo center" style="font-family: 'Fredoka One', cursive;">Exercício 6</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.html"><i class="material-icons">home</i></a></li>
                    <li><a href="../../"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container center">
        <div class="row center">
            <h1>Você está no peso ideal?</h1>
            <div class="col s12 m8 l8 push-l2">
                <form action="ex6.php" method="post">
                    <div class="input-field">
                        <input id="input" type="text" class="validate" name="name">
                        <label for="input" style="font-size: 20px">Nome</label>
                    </div>
                    <div class="input-field">
                        <input id="input" type="text" name="peso">
                        <label for="input" style="font-size: 20px">Peso</label>
                    </div>
                    <select class="input" name="sexo">
                        <option src="" disabled selected>Sexo</option>
                        <option name="sexo">Masculino</option>
                        <option name="sexo">Feminino</option>
                    </select>
                    <div class="input-field">
                        <input id="input" type="text" name="altura">
                        <label for="input" style="font-size: 20px">Altura</label>
                    </div>
                    <div>
                        <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Limpar</button>
                        <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
        <div><?php 
            $name = $_POST["name"];
            $peso = $_POST["peso"];
            $sexo = $_POST["sexo"];
            $altura = (float) $_POST["altura"];
            if($sexo == "Masculino") {
                $pi=pow($altura,2)*23;
                echo "<h2>$name, seu peso é: $peso kg <br> O peso ideal é: $pi kg<h2>";

                    if($peso>$pi) {
                        echo '<font color="red" >'."Você, está acima do peso ideal".'<font>';    
                    }
                    if($peso<$pi) {
                        echo '<font color="yellow" >'."Você abaixo do peso ideal".'<font>';    
                    }
                    else if($peso=$pi) {
                        echo '<font color="blue" >'."Você está dentro do peso ideal".'<font>';    
                    }
                
            }
            else if($sexo == "Feminino") {
                $pi= pow($altura, 2)*22;
                echo "<h2>$name, seu peso é: $peso kg <br> O peso ideal é: $pi kg<h2>";

                    if($peso>$pi) {
                        echo '<font color="red" >'."Você está acima do peso ideal".'<font>';    
                    }
                    if($peso<$pi) {
                        echo '<font color="yellow" >'."Você abaixo do peso ideal".'<font>';    
                    }
                    else if($peso=$pi) {
                        echo '<font color="blue" >'."Você está dentro do peso ideal".'<font>';    
                    }
            }
        ?></div>
        <div class="divider"></div>
        <ul class="pagination center">
            <li class="waves-effect"><a href="ex5.php"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect"><a href="../index.html"><i class="material-icons">home</i></a></li>
            <li class="waves-effect"><a href="ex1.php">1</a></li>
            <li class="waves-effect"><a href="ex2.php">2</a></li>
            <li class="waves-effect"><a href="ex3.php">3</a></li>
            <li class="waves-effect"><a href="ex4.php">4</a></li>
            <li class="waves-effect"><a href="ex5.php">5</a></li>
            <li class="active"><a href="ex6.php">6</a></li>
            <li class="waves-effect"><a href="ex7.php">7</a></li>
            <li class="waves-effect"><a href="ex8.php">8</a></li>
            <li class="waves-effect"><a href="ex9.php">9</a></li>
            <li class="waves-effect"><a href="ex10.php">10</a></li>
            <li class="waves-effect"><a href="ex7.php"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, classes="");
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>