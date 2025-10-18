<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<header>
    <h1>Atividade 01</h1>
</header>

<body>
    <h3>Calcular a soma de três valores com cores condicionais</h3>
    <form method="post">
        <label>Primeiro valor: <input type="number" name="num1" required></label><br>
        <label>Segundo valor: <input type="number" name="num2" required></label><br>
        <label>Terceiro valor: <input type="number" name="num3" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 > 10) {
        $color = "blue";
    } elseif ($num2 < $num3) {
        $color = "green";
    } elseif ($num3 < $num1 && $num3 < $num2) {
        $color = "red";
    }

    echo "<h2 style='color: $color;'>O valor da soma é: " . ($num1 + $num2 + $num3) . "</h2>";
    ?>
</body>

</html>