<?php
include 'dbconfig.php';

// Fetch one record by ID
$sql = "SELECT * FROM musicians WHERE id = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Display the result using fetch() with print_r()
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
echo "</pre>";
?>
