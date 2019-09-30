<?php
    $nomeSistema = "Nome da loja";
    $usuario = ["nome" => "Aline"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja virtual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="navbar bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/icon_loja.png" width="30" height="30" alt="">
            <?php echo $nomeSistema; ?>
        </a>

        <nav class="justify-content-end">
        <!-- segura o alt e as linhas para escrever ao mesmo tempo -->
            <ul class="nav">

                <?php
                    if (isset($usuario) && $usuario != []) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá, <?php echo $usuario['nome'];?>!</a>    
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>    
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="container">
            <div class="card-deck mt-5">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nome do curso</h5>
                        <img src="img/img_curso_01.jpg" class="card-img-top" alt="...">
                        <h5 class="mt-2 mb-2 text-muted">R$ 500</h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nome do curso</h5>
                        <img src="img/img_curso_01.jpg" class="card-img-top" alt="...">
                        <h5 class="mt-2 mb-2 text-muted">R$ 500</h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nome do curso</h5>
                        <img src="img/img_curso_01.jpg" class="card-img-top" alt="...">
                        <h5 class="mt-2 mb-2 text-muted">R$ 500</h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
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