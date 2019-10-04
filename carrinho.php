<?php
    $nomeSistema = "Nome da loja";
    $usuario = ["nome" => "Aline"];
    $categorias = ["Cursos", "Palestras", "Artigos"]
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja virtual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
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

    <nav id="menu-categorias">
            <ul class="nav justify-content-center">
                <?php foreach ($categorias as $categoria) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <?php echo $categoria ?> </a>
                    </li>
                <?php } ?>
            </ul>
    </nav>

    <main>
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Carrinho de compras</h1>
                </div>
                <div class="col-12">
                    <div class="row card">
                        <div class="col-12">
                            <h3>Você está comprando o curso <?php echo $_GET["nomeProduto"]; ?></h3>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form class="d-flex flex-column p-3" method="post" action="sucesso.php">
                            <input type="text" name="nomeCompleto" placeholder="Digite seu nome completo">
                            <input type="text" name="cpf" placeholder="000.000.000-00">
                            <input type="number" name="numeroCartao" placeholder="Digite o número do cartão">
                            <input type="date" name="validadeCartao" placeholder="MM/AA">
                            <input type="number" name="codigoCartao" placeholder="Digite o CVV">
                            <button type="submit" class="btn btn-success">Finalizar compra</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
</body>
</html>