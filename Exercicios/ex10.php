<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Exercício 10</title>
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
                <a href="#" class="brand-logo center" style="font-family: 'Fredoka One', cursive;">Exercício 10</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.html"><i class="material-icons">home</i></a></li>
                    <li><a href="../../"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container center">
        <div class="row">
            <h1>Simulação de Investimento</h1>
            <div class="col s12 m8 l8 push-l2">
                <form action="ex10.php" method="post">
                    <div class="input-field">
                        <input class="opa" type="text" class="validate" name="frase">
                        <label for="opa" style="font-size: 20px">Nome</label>
                    </div>
                    <div class="input-field">
                        <input id="input" type="text" class="validate" name="number">
                        <label for="input" style="font-size: 20px;">Valor de investimento</label>
                    </div>
                    <select class="input" name="invest">
                        <option src="">Tipos de investimentos</option>
                        <option name="invest">Poupança - 0.5%</option>
                        <option name="invest">Renda Fixa - 1.0%</option>
                    </select>
                    <input type="text" class="datepicker" name="temp" value="Tempo de investimento">
                    <!-- <input class="month" type="month" class="validate" name="temp"> -->
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Limpar</button>
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Calcular</button>
                </form>
            </div>
        </div>
        <table>
            <?php
                $name = $_POST['frase'];
                $dim = $_POST['number'];
                $invest = $_POST['invest'];
                $data = $_POST['temp'];
                $tempM = date('m', strtotime($data));
                $tempY = date('Y', strtotime($data));
                $rest = 12*($tempY - date('Y')) + $tempM - date('m') + 1;
                $i = 1;
                $date1 = date_create(date('d-M-Y'));
                // $date1 = date_create("1-$tempM-$tempY");
                $interval = new DateInterval('P1M');
                if ((strlen($name) > 0) && (strlen($dim) > 0) && (strlen($data) > 0)) {
                    echo "<h5>Caro $name, seus rendimentos mensais são esses</h5>";
                    if ($invest == "Poupança - 0.5%") {
                        while ($i < $rest) {
                            $dim = $dim * 1.005;
                            $formatDim = number_format($dim, 2, ',', ' ');
                            echo "<tr>";
                            date_add($date1, $interval);
                            echo "<td>" . date_format($date1, "M, Y") . "</td><td>$formatDim<td/>";
                            echo "</tr>";
                            $i++;
                        }
                    } else if ($invest == "Renda Fixa - 1.0%") {
                        while ($i < $rest) {
                            $dim = $dim * 1.01;
                            $formatDim = number_format($dim, 2, ',', ' ');
                            echo "<tr>";
                            date_add($date1, $interval);
                            echo "<td>" . date_format($date1, "M, Y") . "</td><td>$formatDim<td/>";
                            echo "</tr>";
                            $i++;
                        }
                    }
                }
            ?>
        </table>
        <div class="divider"></div>
        <ul class="pagination center">
            <li class="waves-effect"><a href="ex9.php"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect"><a href="../index.html"><i class="material-icons">home</i></a></li>
            <li class="waves-effect"><a href="ex1.php">1</a></li>
            <li class="waves-effect"><a href="ex2.php">2</a></li>
            <li class="waves-effect"><a href="ex3.php">3</a></li>
            <li class="waves-effect"><a href="ex4.php">4</a></li>
            <li class="waves-effect"><a href="ex5.php">5</a></li>
            <li class="waves-effect"><a href="ex6.php">6</a></li>
            <li class="waves-effect"><a href="ex7.php">7</a></li>
            <li class="waves-effect"><a href="ex8.php">8</a></li>
            <li class="waves-effect"><a href="ex9.php">9</a></li>
            <li class="active"><a href="ex10.php">10</a></li>
        </ul>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, classes="");
        });
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, format='mm,yyyy');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
<!-- $date1 = date_create("1-01-2020");
    echo date_format($date1, "M,Y");
    for ($i = 0; $i < 12; $i++) {
        $interval = new DateInterval('P1M');
        date_add($date1, $interval);
        echo date_format($date1, "M,Y");
    } -->