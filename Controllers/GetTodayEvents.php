<?php
    include('DBConnectivity.php');
    $day = $_GET['today'];

    $query = "SELECT e.name, e.image, es.start, es.end
            FROM event e 
            JOIN `event-schedule` es ON e.ID = es.event_ID
            WHERE es.day = '$day'
            AND es.start IS NOT NULL
            ORDER BY es.start";

    $result = mysqli_query($db, $query);

    $data = array();

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    mysqli_close($db);

    echo json_encode([
        'data' => $data
    ]);

?>