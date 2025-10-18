<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>
<header>
    <h1>Atividade 02</h1>
</header>

<body>
    <h3>Verificar se o valor é divisível por 2 (Par)</h3>
    <form method="post">
        <label>Valor: <input type="number" name="num" required></label><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $num = $_POST['num'];

    function isEven($number): bool
    {
        return $number % 2 == 0;
    }

    if (isEven($num)) {
        echo "<h2>O número $num é divisível por 2.</h2>";
    } else {
        echo "<h2>O número $num NÃO é divisível por 2.</h2>";
    }
    ?>
</body>

</html>