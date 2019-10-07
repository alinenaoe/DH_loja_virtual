<?php
//criando array de erros para mostrar ao usuário
$erros = [];

//criando funções de validação
function validaNome($nome) {
    global $erros;
    if (strlen($nome) == 0) {
        array_push($erros, "Insira seu nome");
    }
}

function validaCPF($cpf) {
    global $erros;
    if (strlen($cpf) != 11) {
        array_push($erros, "Insira o número do seu CPF");
    }
}
?>
