<?php
//usuário cadastrado no banco
$usuario = ['email'=>'alinenaoe@gmail.com', 'senha'=>'$2y$10$sdlCrzh6Rk3aS.7qkK0Or.xigg3XOgwYBWLQUAmxv8DdHrMEiRZOG'];

if($_POST) {
    $email = $_POST['email']; 
    $senha = $_POST['senha'];
    //validando email
    if($email == $usuario['email']) {
        //validando a senha
        if(password_verify($senha,$usuario['senha'])) {
            session_start();
            $_SESSION['usuario'] = ['nome' => "Aline"];
            header('Location:index.php');
        } else {
            echo "Email ou senha inválidas";
        }

    } else {
        echo "Email ou senha inválidas";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login do usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include_once("header.php");?>
    <main class="d-flex justify-content-center align-items-center p-5">
      <form action="" method="post" class="card p-2 bg-light p-4">
        <div class="form-group"> 
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group"> 
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha" id="senha" required>
        </div>
        <div class="form-group"> 
        <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </main>
    <form action=""></form>
</body>
</html>