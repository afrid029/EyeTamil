<?php

    if(isset($_POST['submit'])){

        if (!isset($_COOKIE['user'])) {
            header('Location: /');

             echo "<script>window.location.pathname = '/'</script>";
        exit();
        }
      
        include('DBConnectivity.php');


        $announce = $_POST['announce'];
        $event = $_POST['event'];
        $role = 'RJ';

        $query = "UPDATE event set notes = '$announce', announceStatus = true WHERE ID = '$event'";
        $result = mysqli_query($db, $query);

        if($result) {
            // $_SESSION['message'] = "Failed to upload Images. Try again later!";
            // $_SESSION['status'] = false;
            // $_SESSION['fromAction'] = true;
            mysqli_close($db);

            echo json_encode([
                'status' => true,
                'message' => 'Announcement Added!'
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
    }elseif (isset($_POST['announcement-viewed'])) {
        if (!isset($_COOKIE['user'])) {
            header('Location: /');
            echo "<script>window.location.pathname = '/'</script>";
            exit();
        }
        include('DBConnectivity.php');
        $ID = $_POST['ID'];

        $query = "UPDATE event set announceStatus = false where ID = '$ID'";
        $result = mysqli_query($db, $query);

        if($result) {
            mysqli_close($db);

            echo json_encode([
                'status' => true,
                'message' => 'Annoucement Viewed!'
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
        echo "<script>window.location.pathname = '/'</script>";
        exit();
    }

?>