<?php
include 'dbconfig.php';

// Update a musician's details
$sql = "UPDATE musicians SET name = :name, instrument = :instrument, genre = :genre, debut_year = :debut_year WHERE id = :id";
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindParam(':name', $name);
$stmt->bindParam(':instrument', $instrument);
$stmt->bindParam(':genre', $genre);
$stmt->bindParam(':debut_year', $debut_year);
$stmt->bindParam(':id', $id);

// New data
$name = 'John Lennon';
$instrument = 'Guitar';
$genre = 'Rock';
$debut_year = 1960;
$id = 1;

$stmt->execute();
echo "Record updated successfully!";
?>
