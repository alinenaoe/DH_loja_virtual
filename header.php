<?php 
    include_once("variaveis.php");
?>

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