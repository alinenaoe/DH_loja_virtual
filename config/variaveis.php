<?php
session_start();

    $nomeSistema = "Nome da loja";
    $usuario = isset($_SESSION['usuario'])? $_SESSION['usuario']:[];

    // $produtos = [
    //     ["nome" => "Fullstack", "preco" => 3000, "duracao" => "5 meses", "img" => "img/img_curso_01.jpg"],
    //     ["nome" => "Marketing Digital", "preco" => 1000, "duracao" => "4 meses", "img" => "img/img_curso_02.jpg"],
    //     ["nome" => "UX Design", "preco" => 5000, "duracao" => "9 meses", "img" => "img/img_curso_03.jpg"]
    // ];
    $nomeArquivo = __DIR__."/../produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo), true);
    // echo $nomeArquivo;

    $categorias = ["Cursos", "Palestras", "Artigos"]
?>
