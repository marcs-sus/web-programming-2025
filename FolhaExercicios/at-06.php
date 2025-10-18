<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 06</title>
</head>
<header>
    <h1>Atividade 06</h1>
</header>

<body>
    <h4>Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
        Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha...</h4>
    <h3>Insira os valores em Kg de cada produto</h3>
    <form method="post">
        <label>Maça: <input type="number" name="apple" required></label><br>
        <label>Melancia: <input type="number" name="watermelon" required></label><br>
        <label>Laranja: <input type="number" name="orange" required></label><br>
        <label>Repolho: <input type="number" name="cabbage" required></label><br>
        <label>Cenoura: <input type="number" name="carrot" required></label><br>
        <label>Batatinha: <input type="number" name="potato" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $budget = 50.00;

    $items = array(
        'apple' => $_POST['apple'],
        'watermelon' => $_POST['watermelon'],
        'orange' => $_POST['orange'],
        'cabbage' => $_POST['cabbage'],
        'carrot' => $_POST['carrot'],
        'potato' => $_POST['potato']
    );

    $prices = array(
        'apple' => 2.50,
        'watermelon' => 3.00,
        'orange' => 1.80,
        'cabbage' => 1.20,
        'carrot' => 0.90,
        'potato' => 1.50
    );

    function calculateValue($quantity, $price)
    {
        $value = $quantity * $price;
        return $value;
    }

    function calculateTotal($items, $prices)
    {
        $total = 0;
        foreach ($items as $item => $quantity) {
            if (isset($prices[$item])) {
                $total += calculateValue($quantity, $prices[$item]);
            }
        }

        return $total;
    }

    $total = calculateTotal($items, $prices);

    echo "<h3>O total gasto na feira foi R$ " . number_format($total, 2, ',', '.') . "</h3>";

    if ($total > $budget) {
        echo "<h3 style='color: red'>Joãozinho estourou o orçamento em R$ " . number_format($total - $budget, 2, ',', '.') . "</h3>";
    } else {
        echo "<h3 style='color: blue'>Joãozinho ainda tem R$ " . number_format($budget - $total, 2, ',', '.') . " de troco</h3>";
    }
    ?>
</body>

</html>