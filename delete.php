<?php
include 'dbconfig.php';

// Delete a musician by ID
$sql = "DELETE FROM musicians WHERE id = :id";
$stmt = $pdo->prepare($sql);

// Bind parameter
$stmt->bindParam(':id', $id);

// ID of the musician to delete
$id = 2;

$stmt->execute();
echo "Record deleted successfully!";
?>
