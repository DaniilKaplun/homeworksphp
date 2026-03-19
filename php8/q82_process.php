<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Question 2 Output</title>
</head>
<body>

<h2>Question 2: Student Associative Array</h2>

<?php
$student = array(
    "Name" => $_POST["Name"] ?? "",
    "ID" => $_POST["ID"] ?? "",
    "Address" => $_POST["Address"] ?? "",
    "Major" => $_POST["Major"] ?? "",
    "Email" => $_POST["Email"] ?? "",
    "Phone" => $_POST["Phone"] ?? ""
);

// a. sort array by keys
ksort($student);

echo "<strong>a. Sorted by keys:</strong><br>";
echo "<pre>";
print_r($student);
echo "</pre>";

// b. print as HTML table
echo "<strong>b. HTML table:</strong><br>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Key</th><th>Value</th></tr>";
foreach ($student as $key => $value) {
    echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
}
echo "</table><br><br>";

// c. print just the values
echo "<strong>c. Values only:</strong><br>";
foreach ($student as $value) {
    echo htmlspecialchars($value) . "<br>";
}
echo "<br>";

// d. print name, email, and phone
echo "<strong>d. Selected values:</strong><br>";
echo "Name: " . htmlspecialchars($student["Name"]) . "<br>";
echo "Email: " . htmlspecialchars($student["Email"]) . "<br>";
echo "Phone: " . htmlspecialchars($student["Phone"]) . "<br>";
?>

</body>
</html> 
