<?php

session_start();

// include database and object files
include '../config/database.php';
include '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new users ($db);

// set ID property of user to be edited
// $user->username = isset($_POST['username']) ? $_SESSION['username']=$_POST['username'] : die();
$user->username = isset($_POST['username']) ? $_SESSION['username']=$_POST['username'] : die();
$user->password = base64_encode(isset($_POST['password']) ? $_SESSION['password']= $_POST['password'] : die());

session_start();
if (isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $pass = $_SESSION['password'];
    // header ("location: admin.php");
}

// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo "<h1 class= 'text-white'>Welcome " . $_SESSION['username'] . "</h1>" ; 
    // echo
    //  "<div class='text-center'><h3>hello $username </h3>
    // <a class='btn ' href='logout.php'>Log out</a></div>";

    header('location:admin.php');

}

else{
    echo '<script>
    alert("Les données saisie sont incorrectes !"); 
    window.location.href="/../login.html";
    </script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
</body>
</html>