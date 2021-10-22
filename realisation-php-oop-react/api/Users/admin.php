<?php 

include 'api/Users/login.php';
include 'api/Users/signup.php';

// include 'api/config/da'

session_start();
if (isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Welcome</title>
</head>
<body>
    
    <?php

echo "<h1 class= 'text-white'>Welcome " . $_SESSION['username'] . "</h1>" ; 
    //  echo "<div class='text-center'><h3>hello $username </h3> <a class='btn' href='logout.php'>Log out</a></div>";
     ?>
     <a class='btn' href='logout.php'>Log out</a>
</body>
</html>
