<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
</head>
<header>
    <h1>Atividade 05</h1>
</header>

<body>
    <h3>Calcular a área de um triângulo retângulo</h3>
    <form method="post">
        <label>Altura do triângulo (m): <input type="number" name="height" required></label><br>
        <label>Base do triângulo (m): <input type="number" name="base" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $height = $_POST['height'];
    $base = $_POST['base'];

    function calculateTriangleArea($base, $height): float
    {
        return ($base * $height) / 2;
    }

    $area = calculateTriangleArea($base, $height);

    echo "<h3>A área do triângulo retângulo com altura $height e base $base metros é $area metros quadrados.</h3>";
    ?>
</body>

</html>