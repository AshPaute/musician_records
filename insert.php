<?php
include 'dbconfig.php';

// Insert a new musician into the 'musicians' table
$sql = "INSERT INTO musicians (name, instrument, genre, debut_year) VALUES (:name, :instrument, :genre, :debut_year)";
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindParam(':name', $name);
$stmt->bindParam(':instrument', $instrument);
$stmt->bindParam(':genre', $genre);
$stmt->bindParam(':debut_year', $debut_year);

// Sample data to insert
$name = 'Alice Cooper';
$instrument = 'Bass';
$genre = 'Rock';
$debut_year = 2015;

$stmt->execute();
echo "Record inserted successfully!";
?>
