<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Output</title>
</head>
<body>

<h2>Submitted Information</h2>

<?php
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';

echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
echo "<p><strong>Cell phone number:</strong> " . htmlspecialchars($phone) . "</p>";
echo "<p><strong>Email address:</strong> " . htmlspecialchars($email) . "</p>";
?>

</body>
</html> 