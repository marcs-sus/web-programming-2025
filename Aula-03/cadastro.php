<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Cadastro recebido!</h1>";
    echo "<p>Nome: " . htmlspecialchars($_POST['name']) . "</p>";
    echo "<p>Sobrenome: " . htmlspecialchars($_POST['surname']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p>Data de Nascimento: " . htmlspecialchars($_POST['birthdate']) . "</p>";
    echo "<p>Sexo: " . htmlspecialchars($_POST['gender']) . "</p>";
    echo "<p>Endereço: " . htmlspecialchars($_POST['address']) . "</p>";
    echo "<p>Cor favorita: " . htmlspecialchars($_POST['color']) . "</p>";
    echo "<p>Estado: " . htmlspecialchars($_POST['state']) . "</p>";
} else {
    echo "<h1>Nenhum dado enviado.</h1>";
}
?>