<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 08</title>
</head>
<header>
    <h1>Atividade 08</h1>
</header>

<body>
    <h4>Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
        utiliza Juros Simples para o cálculo das parcelas.
        Sabendo então que o valor a vista do moto é R$ 8.654,00....</h4>
    <h3>Calcular o valor das parcelas</h3>
    <form method="post">
        <label for="car_price">Valor da Moto (R$): </label>
        <input type="number" name="car_price" id="car_price" value="8654" required>
        <br><br>
        <label for="num_installments">Número de Parcelas:</label>
        <select name="num_installments" id="num_installments">
            <option value="24">24 Vezes</option>
            <option value="36">36 Vezes</option>
            <option value="48">48 Vezes</option>
            <option value="60">60 Vezes</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $car_price = $_POST['car_price'];
    $num_installments = $_POST['num_installments'];

    function calculateFee($base_fee, $rate_fee, $num_installments): float
    {
        return $base_fee + ($rate_fee * ($num_installments / 12) - $rate_fee * 2);
    }

    function calculateTotalPrice($car_price, $fee): float
    {
        return $car_price + $car_price * ($fee / 100);
    }

    function calculateInstallment($total, $num_installments): float
    {
        return $total / $num_installments;
    }

    $fee = calculateFee(1.5, 0.5, $num_installments);
    $total = calculateTotalPrice($car_price, $fee);
    $installment = calculateInstallment($total, $num_installments);

    echo "<h3>Taxa de Juros: $fee%</h3>";
    echo "<h3>Valor das Parcelas: R$ " . number_format($installment, 2, ',', '.') . "</h3>";
    ?>
</body>

</html>