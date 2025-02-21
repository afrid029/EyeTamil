<?php 
include('DBConnectivity.php');

$query = "SELECT e.name, es.day, es.start, es.end
FROM event e
JOIN `event-schedule` es on e.ID = es.event_ID
WHERE es.start IS NOT NULL
ORDER BY es.day, es.start";

$result = mysqli_query($db, $query);

$data = array();

while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_close($db);

echo json_encode([
    'data' => $data
]);

?>