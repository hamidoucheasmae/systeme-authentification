<?php

include_once '../config/database.php';
include_once '../objects/user.php';



session_start();
$database = new Database();
$db = $database->getConnection();
 
$user = new users($db);


 
// set user property values
$user->email = $_POST['email'];
$user->password = base64_encode($_POST['password']);
$user->username = $_POST['username'];

// session_start();
// if (isset($_POST['submit'])){
//     $username = $_SESSION['username'];
//     $pass = $_SESSION['password'];

//     // header ("location: admin.php");
// }
 
// create the user

if($user->signup()){
    
        echo '<script>
		alert("Votre compte a été bien créé"); 
		window.location.href="../../login.html";
		</script>'
		 ;
		
		
		// header ("location: admin.php");
  
}

else{
        echo'<script>
		alert("Ce compte existe déja"); 
		window.location.href="/../login.html";
		</script>' ;
}

?>