<?php

include_once '../config/database.php';
 
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new users($db);
 
// set user property values
$user->email = $_POST['email'];
$user->password = base64_encode($_POST['password']);
$user->username = $_POST['username'];
 
// create the user
if($user->signup()){
    
        echo '<script>
		alert("Votre compte a été bien créé"); 
		window.location.href="/../login.html";
		</script>'
		 ;
  
}

else{
        echo'<script>
		alert("Ce compte existe déja"); 
		window.location.href="/../login.html";
		</script>' ;
}

?>