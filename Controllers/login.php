<?php 
if(isset($_POST['submit'])){
    SESSION_START();
    $username = $_POST['username'];
    $password = $_POST['password'];

    phpinfo();
    exit();

    include('DBConnectivity.php');

    $query = "SELECT * from users WHERE ID = '$username'";
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if($row['active'] == true){
            if($row['password'] === $password) {

                $data = [
                    'ID' => $row['ID'],
                    'role' => $row['role']
                ];
    
                $iv = openssl_random_pseudo_bytes(16);  // AES block size is 16 bytes
    
                // Encrypt the email using AES-256-CBC encryption
                    $key = '7f8b68e0133a19cce9fa5b7c440c788bf6c5679a3e7e3a4575b99f941607d3b7';
                    $encryptedData = openssl_encrypt(serialize($data), 'aes-256-cbc', $key, 0, $iv);
                
                    // Combine the IV with the encrypted email to store both together
                    $encryptedWithWithIv = base64_encode($iv . $encryptedData);
        
                    setcookie('user', $encryptedWithWithIv, time() + 21600, '/');
        
                    $_SESSION['isLoggedIn'] = true;
    
                    if($row['role'] === 'RJ'){
                        $_SESSION['fromAction'] = true;
                        $_SESSION['message'] = 'Logged in Successfully';
                        $_SESSION['status'] = true;
                        mysqli_close($db);
                        header('Location: /rjboard');
                    } else {
                        $_SESSION['fromAction'] = true;
                        $_SESSION['message'] = 'Logged in Successfully';
                        $_SESSION['status'] = true;
                        mysqli_close($db);
                        header('Location: /dashboard');
                    }
             
            }else {
                $_SESSION['fromAction'] = true;
                $_SESSION['message'] = 'Entered Password is wrong';
                $_SESSION['status'] = false;
                mysqli_close($db);
                header('Location: /');
            }
        }else {
            $_SESSION['fromAction'] = true;
            $_SESSION['message'] = 'You have been disabled. Contact Administrator';
            $_SESSION['status'] = false;
            mysqli_close($db);
            header('Location: /');
        }
        


    }else {
        $_SESSION['fromAction'] = true;
        $_SESSION['message'] = 'Username not found!';
        $_SESSION['status'] = false;
        mysqli_close($db);
        header('Location: /');
    }
}
?>