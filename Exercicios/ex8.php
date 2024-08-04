<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Exercício 8</title>
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
                <a href="#" class="brand-logo center" style="font-family: 'Fredoka One', cursive;">Exercício 8</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.html"><i class="material-icons">home</i></a></li>
                    <li><a href="../../"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container center">
        <div class="row center">
            <h1>Raiz quadrada</h1>
            <div class="col s12 m8 l8 push-l2">
                <h3></h3>
                <form action="ex8.php" method="post">
                    <div class="input-field">
                        <input id="input" type="number" class="validate" name="number">
                        <label for="input" style="font-size: 20px">Entre com um número inteiro</label>
                    </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Limpar</button>
                        <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Calcular</button>
                </form>
            </div>
            <?php
                $number = $_POST["number"];
                $int=1;
                if (strlen($_POST["number"]) > 0) {
                    echo "<div class='col s12 m6 l6 push-l2'>";
                    for($int=$number;$int<=10+$number;$int++) {
                        echo "<br>";     
                        echo "A raiz de $int é: ";
                        echo number_format(sqrt($int), 2, ','); 
                        echo "<br>";        
                    }
                    echo "</div>";
                    echo "<div class='col s12 m6 l6 pull-l2'>";
                    for($int2=$int;$int2<=10+$int;$int2++) {
                        echo "<br>";     
                        echo "A raiz de $int2 é: ";
                        echo number_format(sqrt($int2), 2, ','); 
                        echo "<br>";        
                    }
                    echo "</div>";
                }
                unset($number);
            ?>
        </div>
        <div class="divider"></div>
        <ul class="pagination center">
                <li class="waves-effect"><a href="ex7.php"><i class="material-icons">chevron_left</i></a></li>
                <li class="waves-effect"><a href="../index.html"><i class="material-icons">home</i></a></li>
                <li class="waves-effect"><a href="ex1.php">1</a></li>
                <li class="waves-effect"><a href="ex2.php">2</a></li>
                <li class="waves-effect"><a href="ex3.php">3</a></li>
                <li class="waves-effect"><a href="ex4.php">4</a></li>
                <li class="waves-effect"><a href="ex5.php">5</a></li>
                <li class="waves-effect"><a href="ex6.php">6</a></li>
                <li class="waves-effect"><a href="ex7.php">7</a></li>
                <li class="active"><a href="ex8.php">8</a></li>
                <li class="waves-effect"><a href="ex9.php">9</a></li>
                <li class="waves-effect"><a href="ex10.php">10</a></li>
                <li class="waves-effect"><a href="ex9.php"><i class="material-icons">chevron_right</i></a></li>
            </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>