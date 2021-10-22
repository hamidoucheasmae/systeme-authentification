<?php 

include 'api/Users/login.php';


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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome</title>
</head>
<body>
    
    <?php
     echo "<div class='text-center'><h3>hello $username </h3> <a class='btn btn-danger' href='logout.php'>Log out</a></div>";
     ?>
</body>
</html>