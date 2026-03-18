<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercise 3</title>
</head>
<body>

<?php
$age = 16;              // integer
$price = 12.50;         // float
$name = "Jayden";       // string
$isStudent = true;      // boolean
?>

<h2>PHP Data Types Table</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Variable</th>
        <th>Value</th>
        <th>Data Type</th>
    </tr>
    <tr>
        <td>$age</td>
        <td><?php echo $age; ?></td>
        <td><?php echo gettype($age); ?></td>
    </tr>
    <tr>
        <td>$price</td>
        <td><?php echo $price; ?></td>
        <td><?php echo gettype($price); ?></td>
    </tr>
    <tr>
        <td>$name</td>
        <td><?php echo $name; ?></td>
        <td><?php echo gettype($name); ?></td>
    </tr>
    <tr>
        <td>$isStudent</td>
        <td><?php echo $isStudent ? "true" : "false"; ?></td>
        <td><?php echo gettype($isStudent); ?></td>
    </tr>
</table>

</body>
</html>