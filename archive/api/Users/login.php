<?php
session_start();
$_SESSION['username'] = $username;

// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new users ($db);
// set ID property of user to be edited
$user->email = isset($_POST['email']) ? $_SESSION['email']=$_POST['email'] : die();
$user->password = base64_encode(isset($_POST['password']) ? $_SESSION['password']= $_POST['password'] : die());

if (isset($_POST['email'])){
    $email = $_SESSION['email'];
    $pass = $_SESSION['password'];

}
// read the details of user to be edited
$stmt = $user->login();
// $_SESSION['id']    = $row['id'];
//       $_SESSION['username'] = $user->username;
//       header("Location: index.php");

if(!isset($_SESSION["username"])){
    echo 
    header("Location: index.php");
}

else{
    echo '<script>
    alert("Les données saisie sont incorrectes !"); 
    window.location.href="/../login.html";
    </script>';
}

?>
