<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 09</title>
</head>
<header>
    <h1>Atividade 09</h1>
</header>

<body>
    <h4>Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
        pena que ele não sabia da mesma chance que Paulinho.
        A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o
        valor das parcelas...</h4>
    <h3>Calcular o valor das parcelas</h3>
    <form method="post">
        <label for="moto_price">Valor da Moto (R$): </label>
        <input type="number" name="moto_price" id="moto_price" value="8654" required>
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

    $moto_price = $_POST['moto_price'];
    $num_installments = $_POST['num_installments'];

    function calculateFee($base_fee, $rate_fee, $num_installments)
    {
        return $base_fee + ($rate_fee * ($num_installments / 12) - $rate_fee * 2);
    }

    function calculateTotalAmount($price, $fee, $num_installments)
    {
        return $price * pow((1 + ($fee / 100)), $num_installments);
    }

    function calculateInstallment($amount, $fee, $num_installments)
    {
        return $amount * pow((1 + ($fee / 100)), $num_installments) / $num_installments;
    }

    $fee = calculateFee(2.0, 0.3, $num_installments);
    $amount = calculateTotalAmount($moto_price, $fee, $num_installments);
    $installment = calculateInstallment($moto_price, $fee, $num_installments);

    echo "<h3>Taxa de Juros inicial: $fee%</h3>";
    echo "<h3>Valor das Parcelas: R$ " . number_format($installment, 2, ',', '.') . "</h3>";
    ?>
</body>

</html>