<?php 


    include('DBConnectivity.php');

    $query = "SELECT * FROM users where role = 'RJ' order by ID";
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