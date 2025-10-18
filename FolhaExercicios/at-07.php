<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 07</title>
</head>
<header>
    <h1>Atividade 07</h1>
</header>

<body>
    <h4>Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
        ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
        ficou em 60 parcelas de R$ 489,65...</h4>
    <h3>Calcular o valor dos juros totais</h3>
    <form method="post">
        <label>Valor do carro: <input type="number" name="car_price" value="22500" required></label><br>
        <label>Valor da parcela: <input type="number" name="installment" value="489.65" required></label><br>
        <label>Número de parcelas: <input type="number" name="num_installments" value="60" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!($_SERVER["REQUEST_METHOD"] == "POST"))
        return;

    $car_price = $_POST['car_price'];
    $installment = $_POST['installment'];
    $num_installments = $_POST['num_installments'];

    function calculateTotalPaid($installment, $num_installments): float
    {
        return $installment * $num_installments;
    }

    function calculateTotalInterest($total_paid, $car_price): float
    {
        return $total_paid - $car_price;
    }

    $total_paid = calculateTotalPaid($installment, $num_installments);
    $total_interest = calculateTotalInterest($total_paid, $car_price);

    echo "<h3>O valor total pago foi R$ " . number_format($total_paid, 2, ',', '.') . "</h3>";
    echo "<h3>O valor total dos juros foi R$ " . number_format($total_interest, 2, ',', '.') . "</h3>";
    ?>
</body>

</html>