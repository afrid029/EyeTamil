<?php 


    include('DBConnectivity.php');
    $ID = $_GET['ID'];

    $query = "SELECT es.start, es.end, (SELECT d.day FROM days d where d.ID = es.day) day
FROM `event-schedule`  es
WHERE event_ID = '$ID' 
AND start IS NOT NULL
order by es.day";
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