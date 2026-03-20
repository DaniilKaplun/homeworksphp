<!DOCTYPE html>
<html>
<head>
    <title>Euro Converter</title>
</head>
<body>

<h2>Euro to USD Converter<br> <br> </h2>
<h2>todays rate is 1.16 <br></h2>
<form method="post">
    Enter amount in Euros:
    <input type="number" step="0.01" name="euros" required>
    <input type="submit" value="Convert">
</form>

<?php
function convertToUSD($euros) {
    $rate = 1.16;
    return $euros * $rate;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $euros = $_POST["euros"];
    $usd = convertToUSD($euros);

    echo "<p>$euros Euros = $usd USD</p>";
}
?>

</body>
</html> 