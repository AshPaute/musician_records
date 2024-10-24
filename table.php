<?php
include 'dbconfig.php';

// Fetch all musicians
$sql = "SELECT * FROM musicians";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all records
$musicians = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Render records in an HTML table
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Instrument</th>
    <th>Genre</th>
    <th>Debut Year</th>
</tr>";

foreach ($musicians as $musician) {
    echo "<tr>
        <td>{$musician['id']}</td>
        <td>{$musician['name']}</td>
        <td>{$musician['instrument']}</td>
        <td>{$musician['genre']}</td>
        <td>{$musician['debut_year']}</td>
    </tr>";
}

echo "</table>";
?>
