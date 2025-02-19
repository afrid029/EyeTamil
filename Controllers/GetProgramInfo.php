<?php 
    include('DBConnectivity.php');

    $ID = urldecode($_GET['ID']);

    $query = "SELECT * from event where rj_id = '$ID' LIMIT 1";
    $result = mysqli_query($db, $query);

    $data = array();
    $data[] = mysqli_fetch_assoc($result);


    mysqli_close($db);

    // var_dump($data);

    // exit();

    echo json_encode([
        'data' => $data
    ]);
?>