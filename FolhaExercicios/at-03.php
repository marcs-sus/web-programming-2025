<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<header>
    <h1>Atividade 03</h1>
</header>

<body>
    <h3>Calcular a área de um quadrado</h3>
    <form method="post">
        <label>Lado do quadrado (m): <input type="number" name="side" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $side = $_POST['side'];

    function calculateSquareArea($side): float
    {
        return $side * $side;
    }

    $area = calculateSquareArea($side);

    echo "<h2>A área do quadrado de lado $side metros é $area metros quadrados.</h2>";
    ?>
</body>

</html>