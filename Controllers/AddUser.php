<?php

    if(isset($_POST['submit'])){
        if (!isset($_COOKIE['user'])) {
            header('Location: /');
            echo "<script>window.location.pathname = '/'</script>";
            exit();
        }
      
        include('DBConnectivity.php');


        $username = $_POST['userid'];
        $password = $_POST['password'];
        $role = 'RJ';

        $query = "INSERT INTO users value('$username', '$password', '$role', true)";
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
    } elseif($_POST['edit-submit']) {
        if (!isset($_COOKIE['user'])) {
            header('Location: /');
            echo "<script>window.location.pathname = '/'</script>";
            exit();
        }
      
        include('DBConnectivity.php');


        $username = $_POST['userid'];
        $password = $_POST['password'];
        $active = $_POST['active'];

        // var_dump($_POST);
        // exit();

        $query = "UPDATE users set password = '$password', active = $active  WHERE ID = '$username'";
        $result = mysqli_query($db, $query);

        if($result) {
            // $_SESSION['message'] = "Failed to upload Images. Try again later!";
            // $_SESSION['status'] = false;
            // $_SESSION['fromAction'] = true;
            mysqli_close($db);

            echo json_encode([
                'status' => true,
                'message' => 'User information updated Successfully!'
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