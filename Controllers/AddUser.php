<?php

    if(isset($_POST['submit'])){
      
        include('DBConnectivity.php');


        $username = $_POST['userid'];
        $password = $_POST['password'];
        $role = 'RJ';

        $query = "INSERT INTO users value('$username', '$password', '$role')";
        $result = mysqli_query($db, $query);

        if($result) {
            // $_SESSION['message'] = "Failed to upload Images. Try again later!";
            // $_SESSION['status'] = false;
            // $_SESSION['fromAction'] = true;
            mysqli_close($db);

            echo json_encode([
                'status' => true,
                'message' => 'RJ Created Successfully!'
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