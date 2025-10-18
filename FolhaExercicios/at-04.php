<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>
<header>
    <h1>Atividade 04</h1>
</header>

<body>
    <h3>Calcular a área de um retângulo</h3>
    <form method="post">
        <label>Altura do retângulo (m): <input type="number" name="height" required></label><br>
        <label>Largura do retângulo (m): <input type="number" name="width" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $height = $_POST['height'];
    $width = $_POST['width'];

    function calculateRectangleArea($height, $width): float
    {
        return $height * $width;
    }

    $area = calculateRectangleArea($height, $width);

    $hSize = "1" ? $area > 10 : "3";

    echo "<h$hSize>A área do retângulo lados $height e $width metros é $area metros quadrados.</h$hSize>";
    ?>
</body>

</html>