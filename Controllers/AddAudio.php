<?php
if (isset($_POST['submit'])) {
    if (!isset($_COOKIE['user'])) {
        header('Location: /');
        echo "<script>window.location.pathname = '/'</script>";
        exit();
    }
    include('DBConnectivity.php');


    $desc = $_POST['desc'];
    $date = $_POST['date'];

    $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Public/News/";

    // Get the file extension
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

    // Generate a unique file name using timestamp and a random number
    $timestamp = time(); // Current timestamp (seconds since Unix epoch)
    $randomNumber = rand(1000, 9999); // Random number to add some variability
    $targetImageFile = $targetDirectory . $desc . $timestamp .  $randomNumber . "." . $imageFileType;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetImageFile)) {
        // echo "The file has been uploaded successfully as: " . basename($targetFile);
    } else {

        echo json_encode([
            'status' => false,
            'message' => 'Unable to upload Image. try again later'
        ]);
        mysqli_close($db);
        exit();
    }

    $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Public/Audio/";

    // Get the file extension
    $audioFileType = strtolower(pathinfo($_FILES["audio"]["name"], PATHINFO_EXTENSION));

    // Generate a unique file name using timestamp and a random number
    $timestamp = time(); // Current timestamp (seconds since Unix epoch)
    $randomNumber = rand(1000, 9999); // Random number to add some variability
    $targetAudioFile = $targetDirectory . $desc . $timestamp .  $randomNumber . "." . $audioFileType;

    if (move_uploaded_file($_FILES["audio"]["tmp_name"], $targetAudioFile)) {
        // echo "The file has been uploaded successfully as: " . basename($targetFile);
    } else {

        echo json_encode([
            'status' => false,
            'message' => 'Unable to upload Audio. try again later'
        ]);
        mysqli_close($db);

        exit();
    }

    $query = "INSERT INTO recordedaudio (date, image, audio, description) VALUE('$date', '$targetImageFile', '$targetAudioFile', '$desc')";
    $result = mysqli_query($db, $query);

    if ($result) {

        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Recorded Audio Uploaded!'
        ]);
    } else {
        $error = mysqli_error($db);
        mysqli_close($db);
        echo json_encode([
            'status' => false,
            'message' => $error
        ]);
    }
} elseif (isset($_POST['radio-submit'])) {
    if (!isset($_COOKIE['user'])) {
        header('Location: /');
        echo "<script>window.location.pathname = '/'</script>";
        exit();
    }
    include('DBConnectivity.php');
    $stream = $_POST['stream'];

    $query = "UPDATE stream set stream = '$stream'";
    $result = mysqli_query($db, $query);

    if ($result) {
        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Radio Stream Updated'
        ]);
    } else {
        $error = mysqli_error($db);
        mysqli_close($db);
        echo json_encode([
            'status' => false,
            'message' => $error
        ]);
    }
} elseif (isset($_POST['edit-submit'])) {
    if (!isset($_COOKIE['user'])) {
        header('Location: /');
        echo "<script>window.location.pathname = '/'</script>";
        exit();
    }
    include('DBConnectivity.php');


    $ID = $_POST['ID'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];

    $query = "SELECT * from recordedaudio WHERE ID = '$ID'";
    $result = mysqli_query($db, $query);
    $fetchedRow = mysqli_fetch_assoc($result);

    $isImage = false;
    $targetImageFile;

    $isAudio = false;
    $targetAudioFile;
    

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        unlink($fetchedRow['image']);
        $isImage = true;
        $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Public/News/";

        // Get the file extension
        $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

        // Generate a unique file name using timestamp and a random number
        $timestamp = time(); // Current timestamp (seconds since Unix epoch)
        $randomNumber = rand(1000, 9999); // Random number to add some variability
        $targetImageFile = $targetDirectory . $desc . $timestamp .  $randomNumber . "." . $imageFileType;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetImageFile)) {
            // echo "The file has been uploaded successfully as: " . basename($targetFile);
        } else {

            echo json_encode([
                'status' => false,
                'message' => 'Unable to upload Image. try again later'
            ]);
            mysqli_close($db);
            exit();
        }
    }

    if (isset($_FILES['audio']) && $_FILES['audio']['error'] == 0) {
        unlink($fetchedRow['audio']);
        $isAudio = true;
        $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . "/Public/Audio/";

        // Get the file extension
        $audioFileType = strtolower(pathinfo($_FILES["audio"]["name"], PATHINFO_EXTENSION));
    
        // Generate a unique file name using timestamp and a random number
        $timestamp = time(); // Current timestamp (seconds since Unix epoch)
        $randomNumber = rand(1000, 9999); // Random number to add some variability
        $targetAudioFile = $targetDirectory . $desc . $timestamp .  $randomNumber . "." . $audioFileType;
    
        if (move_uploaded_file($_FILES["audio"]["tmp_name"], $targetAudioFile)) {
            // echo "The file has been uploaded successfully as: " . basename($targetFile);
        } else {
    
            echo json_encode([
                'status' => false,
                'message' => 'Unable to upload Audio. try again later'
            ]);
            mysqli_close($db);
    
            exit();
        }
    }


    if($isAudio && $isImage) {
        $query = "UPDATE recordedaudio set
        date = '$date',
        description = '$desc',
        image = '$targetImageFile',
        audio = '$targetAudioFile'
        WHERE ID = '$ID'
        ";
    }elseif ($isAudio) {
        $query = "UPDATE recordedaudio set
        date = '$date',
        description = '$desc',
        audio = '$targetAudioFile'
        WHERE ID = '$ID'
        ";
    }elseif ($isImage) {
        $query = "UPDATE recordedaudio set
        date = '$date',
        description = '$desc',
        image = '$targetImageFile'
        WHERE ID = '$ID'
        ";
    }else {
        $query = "UPDATE recordedaudio set
        date = '$date',
        description = '$desc'
        WHERE ID = '$ID'
        ";
    }

    // exit();
    $result = mysqli_query($db, $query);

    if ($result) {

        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Recorded Audio Updated!'
        ]);
    } else {
        $error = mysqli_error($db);
        mysqli_close($db);
        echo json_encode([
            'status' => false,
            'message' => $error
        ]);
    }
} elseif (isset($_POST['del-submit'])) {

    if (!isset($_COOKIE['user'])) {
        header('Location: /');
        echo "<script>window.location.pathname = '/'</script>";
        exit();
    }
    include('DBConnectivity.php');
    $ID = $_POST['ID'];

    mysqli_begin_transaction($db);
    $query = "SELECT * FROM recordedaudio WHERE ID = '$ID'";
    $res = mysqli_query($db, $query);

    $row = mysqli_fetch_assoc($res);


    $query = "DELETE FROM recordedaudio where ID = '$ID'";
    $result = mysqli_query($db, $query);

    
    $result2 = false;
    if(file_exists($row['image'])){
        $result2 = unlink($row['image']);
    } else {
        $result2 = true;
    }


    $result3 = false;
    if(file_exists($row['audio'])){
        $result3 = unlink($row['audio']);
    } else {
        $result3 = true;
    }

    // var_dump($result2);

    
    if ($result && $result2 && $result3) {

       mysqli_commit($db);
        mysqli_close($db);
        echo json_encode([
            'status' => true,
            'message' => 'Record Deleted Successfully!'
        ]);
    } else {
        mysqli_rollback($db);
        mysqli_close($db);
        echo json_encode([
            'status' => false,
            'message' => 'Unable to Delete Record. Try again later!'
        ]);
     
    }
} else {
    header('Location: /');
    echo "<script>window.location.pathname = '/'</script>";
    exit();
 
}
