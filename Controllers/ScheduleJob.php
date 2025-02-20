<?php
include('DBConnectivity.php');

// mysqli_close($db);

$query = "SELECT * FROM recordedaudio WHERE date < CURDATE() - INTERVAL 6 DAY order by date desc";

// $query = "SELECT * FROM recordedaudio order by date LIMIT 1";

$result = mysqli_query($db, $query);

if(mysqli_num_rows($result) > 0){
     mysqli_begin_transaction($db);
     while ($row = mysqli_fetch_assoc($result)){
        

        $ID = $row['ID'];

        $query = "DELETE FROM recordedaudio WHERE ID = '$ID'";
        $res = mysqli_query($db, $query);

        if($res) {
            if(file_exists($row['audio'])){
                unlink($row['audio']);
            }
            
            if(file_exists($row['image'])){
                unlink($row['image']);
            }
           
        }else {
            mysqli_rollback($db);
            mysqli_close($db);
            exit();
        }
      
    } 

    mysqli_commit($db);
    mysqli_close($db);
}

mysqli_close($db);
?>