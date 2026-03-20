<!DOCTYPE html>
<html>
<head>
    <title>Mortgage Calculator</title>
</head>
<body>

<h2>Mortgage Calculator</h2>
<form method="post">
    Loan amount: <input type="number" name="loan" required><br><br>
    Annual interest rate (%): <input type="number" step="0.01" name="rate" required><br><br>
    Years: <input type="number" name="years" required><br><br>
    <input type="submit" value="Calculate">
</form>
<?php
function countpay($L, $r, $n) {
    $monthRate = $r / 100 / 12;
    $months = $n * 12;
    $payment = $L * ($monthRate * pow(1 + $monthRate, $months)) 
               / (pow(1 + $monthRate, $months) - 1);

    return $payment;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loan = $_POST["loan"];
    $rate = $_POST["rate"];
    $years = $_POST["years"];
    $result = countpay($loan, $rate, $years);
    echo "<p>Monthly payment: " . round($result, 2) . "</p>";
}
?>
</body>
</html>