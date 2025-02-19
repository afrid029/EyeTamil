<?php 


    include('DBConnectivity.php');
    $ID = $_GET['ID'];

    $query = "SELECT e.name, e.rj_id, es.start, es.end, (SELECT day from days where ID = es.day) day
FROM event e
LEFT JOIN `event-schedule` es ON e.ID = es.event_ID
WHERE e.ID = '$ID';";
    $result = mysqli_query($db, $query);

    
    $data = array();

    $program = '';
    $rj = '';
    while($row = mysqli_fetch_assoc($result)){
        $program = $row['name'];
        $rj = $row['rj_id'];
        $data[] = $row;
    }

    mysqli_close($db);

    echo json_encode([
        'data' => $data,
        'program' => $program,
        'rj' => $rj
    ]);
?>