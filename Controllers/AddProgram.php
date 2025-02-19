<?php

if (isset($_POST['submit'])) {

    include('DBConnectivity.php');

    $schedule = array();

    $program = $_POST['program'];
    $rj = $_POST['rj'];
    $monSt = $_POST['monSt'];
    $monEt = $_POST['monEt'];
    $schedule[] = ['day' => 1, 'st' => $monSt, 'et' => $monEt];

    $tueSt = $_POST['tueSt'];
    $tueEt = $_POST['tueEt'];
    $schedule[] = ['day' => 2, 'st' => $tueSt, 'et' => $tueEt];

    $wedSt = $_POST['wedSt'];
    $wedEt = $_POST['wedEt'];
    $schedule[] = ['day' => 3, 'st' => $wedSt, 'et' => $wedEt];

    $thuSt = $_POST['thuSt'];
    $thuEt = $_POST['thuEt'];
    $schedule[] = ['day' => 4, 'st' => $thuSt, 'et' => $thuEt];

    $friSt = $_POST['friSt'];
    $friEt = $_POST['friEt'];
    $schedule[] = ['day' => 5, 'st' => $friSt, 'et' => $friEt];

    $satSt = $_POST['satSt'];
    $satEt = $_POST['satEt'];
    $schedule[] = ['day' => 6, 'st' => $satSt, 'et' => $satEt];

    $sunSt = $_POST['sunSt'];
    $sunEt = $_POST['sunEt'];
    $schedule[] = ['day' => 7, 'st' => $sunSt, 'et' => $sunEt];

    $query = "SELECT count(*) as cnt FROM event";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['cnt'];
    $randomId = rand(100, 999);

    $ID = 'Event_' . $count . $randomId;

    $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Public/Program/";

    // Get the file extension
    $imageFileType = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));

    // Generate a unique file name using timestamp and a random number
    $timestamp = time(); // Current timestamp (seconds since Unix epoch)
    $randomNumber = rand(1000, 9999); // Random number to add some variability
    $targetFile = $targetDirectory . $program . $timestamp .  $randomNumber . "." . $imageFileType;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        // echo "The file has been uploaded successfully as: " . basename($targetFile);
    } else {

        echo json_encode([
            'status' => false,
            'message' => 'Unable to upload Image. try again later'
        ]);

        mysqli_close($db);

        exit();
    }

    // var_dump($schedule);
    // exit();

    mysqli_begin_transaction($db);
    $query = "INSERT INTO event (ID, name, image, rj_id) value('$ID', '$program', '$targetFile', '$rj')";
    $result = mysqli_query($db, $query);


    $result2 = true;

    for ($i = 0; $i < count($schedule); $i++) {
        $day = $schedule[$i]['day'];
        $st = $schedule[$i]['st'] ? $schedule[$i]['st'] : NULL;
        $et = $schedule[$i]['et'] ? $schedule[$i]['et'] : NULL;

        if($st == NULL || $et == NULL){
            $query = "INSERT INTO `event-schedule` (event_ID, day) VALUE('$ID', '$day' )";
        }else {
            $query = "INSERT INTO `event-schedule` (event_ID, day, start, end) VALUE('$ID', '$day', '$st','$et' )";
        }

        $re = mysqli_query($db, $query);
        $result2 = $result2 && $re;
    }

    // exit();



    if ($result && $result2) {
        // $_SESSION['message'] = "Failed to upload Images. Try again later!";
        // $_SESSION['status'] = false;
        // $_SESSION['fromAction'] = true;

        mysqli_commit($db);
        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Program Created Successfully!'
        ]);
    } else {

        mysqli_rollback($db);
        mysqli_close($db);
        echo json_encode([
            'status' => false,
            'message' => 'Unable to Create Program. Try again later!'
        ]);
    }
}else if(isset($_POST['edit-submit'])){
    include('DBConnectivity.php');

    $schedule = array();

    $ID = $_POST['ID'];
    $program = $_POST['program'];
    $rj = $_POST['rj'];
    $monSt = $_POST['monSt'];
    $monEt = $_POST['monEt'];
    $schedule[] = ['day' => 1, 'st' => $monSt, 'et' => $monEt];

    $tueSt = $_POST['tueSt'];
    $tueEt = $_POST['tueEt'];
    $schedule[] = ['day' => 2, 'st' => $tueSt, 'et' => $tueEt];

    $wedSt = $_POST['wedSt'];
    $wedEt = $_POST['wedEt'];
    $schedule[] = ['day' => 3, 'st' => $wedSt, 'et' => $wedEt];

    $thuSt = $_POST['thuSt'];
    $thuEt = $_POST['thuEt'];
    $schedule[] = ['day' => 4, 'st' => $thuSt, 'et' => $thuEt];

    $friSt = $_POST['friSt'];
    $friEt = $_POST['friEt'];
    $schedule[] = ['day' => 5, 'st' => $friSt, 'et' => $friEt];

    $satSt = $_POST['satSt'];
    $satEt = $_POST['satEt'];
    $schedule[] = ['day' => 6, 'st' => $satSt, 'et' => $satEt];

    $sunSt = $_POST['sunSt'];
    $sunEt = $_POST['sunEt'];
    $schedule[] = ['day' => 7, 'st' => $sunSt, 'et' => $sunEt];



    mysqli_begin_transaction($db);
    $query = "UPDATE event set name = '$program', rj_id = '$rj' WHERE ID = '$ID'";
    $result = mysqli_query($db, $query);


    $result2 = true;

    // var_dump($schedule);
    // exit();

    for ($i = 0; $i < count($schedule); $i++) {
        $day = $schedule[$i]['day'];
        $st = $schedule[$i]['st'] ? $schedule[$i]['st'] : NULL;
        $et = $schedule[$i]['et'] ? $schedule[$i]['et'] : NULL;

        if($st == NULL || $et == NULL){
            $query = "UPDATE `event-schedule` set start = NULL, end = NULL WHERE event_ID = '$ID' AND day = '$day'";
        }else {
            $query = "UPDATE `event-schedule` set start = '$st', end = '$et' WHERE event_ID = '$ID' AND day = '$day'";
           
        }
        $re = mysqli_query($db, $query);
        $result2 = $result2 && $re;

       
    }

    // exit();



    if ($result && $result2) {
        // $_SESSION['message'] = "Failed to upload Images. Try again later!";
        // $_SESSION['status'] = false;
        // $_SESSION['fromAction'] = true;

        mysqli_commit($db);
        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Program Updated Successfully!'
        ]);
    } else {

        mysqli_rollback($db);
        mysqli_close($db);
        echo json_encode([
            'status' => false,
            'message' => 'Unable to Upadte Program. Try again later!'
        ]);
    }
} else if(isset($_POST['del-submit'])){
    include('DBConnectivity.php');
    $ID = $_POST['ID'];

    mysqli_begin_transaction($db);
    $query = "SELECT * FROM event WHERE ID = '$ID'";
    $res = mysqli_query($db, $query);

    $row = mysqli_fetch_assoc($res);


    $query = "DELETE FROM event where ID = '$ID'";
    $result = mysqli_query($db, $query);

    // var_dump(mysqli_error($db));

    // exit();

    
    $result2 = false;
    if(file_exists($row['image'])){
        $result2 = unlink($row['image']);
    }

    else {
        mysqli_commit($db);
        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Image does not exist. Program Deleted Successfully!'
        ]);

        exit();
    }
    // var_dump($result2);

    
    if ($result && $result2) {
        // $_SESSION['message'] = "Failed to upload Images. Try again later!";
        // $_SESSION['status'] = false;
        // $_SESSION['fromAction'] = true;

       mysqli_commit($db);
        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Program Deleted Successfully!'
        ]);
    } else {
        mysqli_rollback($db);
        mysqli_close($db);
        echo json_encode([
            'status' => false,
            'message' => 'Unable to Delete Program. Try again later!'
        ]);
     
    }
} else if(isset($_POST['cover-submit'])) {
    include('DBConnectivity.php');
    $ID = $_POST['ID'];

    $query = "SELECT * FROM event WHERE ID = '$ID'";
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_assoc($result);

    if(file_exists($row['image'])){
        unlink($row['image']);
    }

    $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Public/Program/";

    $imageFileType = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));

    // Generate a unique file name using timestamp and a random number
    $timestamp = time(); // Current timestamp (seconds since Unix epoch)
    $randomNumber = rand(1000, 9999); // Random number to add some variability
    $targetFile = $targetDirectory . $row['name'] . $timestamp .  $randomNumber . "." . $imageFileType;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        // echo "The file has been uploaded successfully as: " . basename($targetFile);
    } else {

        echo json_encode([
            'status' => false,
            'message' => 'Unable to upload Image. try again later'
        ]);
        mysqli_close($db);
        exit();
    }

    $query = "UPDATE event set image = '$targetFile' WHERE ID = '$ID'";
    $result = mysqli_query($db, $query);

    if($result) {
        echo json_encode([
            'status' => true,
            'message' => 'Cover Image updated'
        ]);
    } else {
        echo json_encode([
            'status' => false,
            'message' => 'Unable to upload Cover. try again later!'
        ]);
    }

} else {
    header('Location: /');
    exit();
}
