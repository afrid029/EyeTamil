<?php
// Get the current URL path
$request = $_SERVER['REQUEST_URI'];
$request = explode('?', $request)[0];
// print_r(explode('?', $request)[0]);

// echo $request.implode('?');

// echo $request;

// exit();


// Define routes
switch ($request) {
    case '/':
        require 'index.php';  // Home page
        break;
    case '/dashboard':
        require 'Pages/dashboard.php';
        break;
    case '/rjboard':
        require 'Pages/rjboard.php';
        break;
    default:
        http_response_code(404); // Not Found
        require 'error.php';
        break;
}

?>
