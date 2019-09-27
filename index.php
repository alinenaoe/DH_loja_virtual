<?php
    $nomeSistema = "Nome da loja";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja virtual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3">
        <a href="index.php">
            <?php echo $nomeSistema; ?>
        </a>
        <nav class="justify-content-end">
        <!-- segura o alt e as linhas para escrever ao mesmo tempo -->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>    
                </li>
            </ul>
        </nav>
    </header>


     <!-- <?php
        $nome = "Aline";
        $usuario = ["Aline", "Naoe", 30];
        // var_dump ($usuario);

        $usuario[] = "jornalista";
        echo "<br>";
        //var_dump($usuario);
        //echo $usuario [0 & 1];

        echo "<h1>".$usuario[0]." "." ".$usuario[1]."</h1>";

        //associativa
        $usuarioDois = ["nome" => "Aline", "sobrenome" => "Naoe"];
        //echo $usuarioDois ["sobrenome"];
     ?> -->
</body>
</html>