<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    if ($idade >= 18) {
        $mensagem = "Você está apto para o alistamento militar.";
    } else {
        $mensagem = "Você ainda não tem idade para o alistamento militar. Aguarde até completar 18 anos.";
    }

    echo "Nome: $nome <br>";
    echo "Idade: $idade anos <br>";
    echo "Resultado: $mensagem";
}
?>
