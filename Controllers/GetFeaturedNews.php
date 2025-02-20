<?php
    include('DBConnectivity.php');

    

    $query = "SELECT * FROM recordedaudio WHERE date >= CURDATE() - INTERVAL 6 DAY order by date desc";
    $result = mysqli_query($db, $query);

    $data = array();

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }

    mysqli_close($db);

    echo json_encode([
        'data' => $data
    ]);
?>