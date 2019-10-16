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

<?php
    include_once ("header.php");
?>
    <main>
        <section class="container mt-4">
            <div class="row justify-content-between">
                <?php if(isset($produtos) && $produtos !=[]) {?>
                    <?php foreach($produtos as $produto) {
                        //aqui diz que cada item da array produtos é um produto
                    ?>         
                        <div class="col-lg-3 card text-center">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $produto['nome'] ?></h5>
                                <img src= <?php echo $produto["imagem"] ?> class="card-img-top" alt="...">
                                <h5 class="mt-2 mb-2 text-muted"><?php echo "R$ ".$produto['preco'] ?></h5>
                                <a href="carrinho.php?nomeProduto=<?php echo $produto['nome']; ?>" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    <?php //e aqui fecha a orientação do foreach
                    } ?>
                <?php //fechando o if isset 
                } else {?> 
                <h3>Não há produtos cadastrados nesta seção</h3>
                <?php } ?>
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