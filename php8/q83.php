<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Question 3 Prize Drawing</title>
</head>
<body>

<h2>Question 3: Prize Drawing</h2>

<form method="post">
    <label>Pick a number from 1 to 6:</label><br>
    <input type="number" name="pick" min="1" max="6" required>
    <input type="submit" value="see prze">
</form>

<?php
$images = array(
    "bmw.jpg",
    "pen.jpg",
    "mug.jpg",
    "keychain.jpg",
    "book.jpg",
    "cap.jpg"
);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pick = (int)$_POST["pick"];

    if ($pick >= 1 && $pick <= 6) {
        $prize = $images[$pick - 1];

        echo "<h3>Your prize:</h3>";
        echo "<img src='" . htmlspecialchars($prize) . "' alt='Prize image' width='250'><br><br>";

        if ($prize === "bmw.jpg") {
            echo "<strong>Congratulations! You won the 2006 BMW!</strong>";
        } else {
            echo "You won: " . htmlspecialchars($prize);
        }
    } else {
        echo "<p>Please enter a number from 1 to 6.</p>";
    }
}
?>

</body>
</html>