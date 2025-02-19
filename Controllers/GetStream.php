<?php 
include('DBConnectivity.php');

$query = "SELECT * FROM stream LIMIT 1";
$result = mysqli_query($db, $query);

$row = mysqli_fetch_assoc($result);


mysqli_close($db);

echo json_encode([
    'data' => $row
]);
?>