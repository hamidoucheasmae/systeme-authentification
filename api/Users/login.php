<?php
session_start();
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new users ($db);
// set ID property of user to be edited
$user->email = isset($_POST['email']) ? $_POST['email'] : die();
$user->password = base64_encode(isset($_POST['password']) ? $_POST['password'] : die());
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    header('location:/../login.html');

}

else{
    echo '<script>
    alert("Les données saisie sont incorrectes !"); 
    window.location.href="/../login.html";
    </script>';
}

?>