<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Systeme-Authentification');
define('DB_PASSWORD', '');
define('DB_NAME', 'Systeme-Authentification');


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
