<?php
include 'dbconfig.php';

// Fetch all records from 'musicians' table
$sql = "SELECT * FROM musicians";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Display the result using fetchAll() with print_r()
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($results);
echo "</pre>";
?>
