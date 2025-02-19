<?php

    if(isset($_POST['submit'])){
      
        include('DBConnectivity.php');


        $reqName = $_POST['reqName'];
        $reqFrom = $_POST['reqFrom'];
        $song = $_POST['song'];
        $movie = $_POST['movie'];
        $event = $_POST['event'];
        $description = $_POST['description'];
        

        $query = "INSERT INTO songrequest (reqname, reqfrom, song, movie, description, event_ID, status) 
        value('$reqName', '$reqFrom', '$song', '$movie','$description', '$event', true )";
        $result = mysqli_query($db, $query);

        if($result) {
            // $_SESSION['message'] = "Failed to upload Images. Try again later!";
            // $_SESSION['status'] = false;
            // $_SESSION['fromAction'] = true;
            mysqli_close($db);

            echo json_encode([
                'status' => true,
                'message' => 'Thanks for the request. Keep Listening and Enjoy our beats!'
            ]);
        }

        else {
            $message = mysqli_error($db);
            mysqli_close($db);
            echo json_encode([
                'status' => false,
                'message' => $message
            ]);
        }
    } elseif (isset($_POST['req-viewed'])) {
        include('DBConnectivity.php');
        $ID = $_POST['ID'];

        $query = "DELETE FROM songrequest where ID = '$ID'";
        $result = mysqli_query($db, $query);

        if($result) {
            mysqli_close($db);

            echo json_encode([
                'status' => true,
                'message' => 'Request Fulfilled!'
            ]);
        }

        else {
            $message = mysqli_error($db);
            mysqli_close($db);
            echo json_encode([
                'status' => false,
                'message' => $message
            ]);
        }
    } else {
        header('Location: /');
        exit();
    }

?>