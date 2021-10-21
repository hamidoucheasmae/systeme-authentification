
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
      
         session_start();
        include 'api/config/database.php';
        include  'api/objects/user.php';
        include 'api/users/login.php';
      
      
        // read the details of user to be edited
        $stmt = $user->login();
        if($stmt->rowCount() > 0){
            // get retrieved row
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "hello  $email <a class='btn btn-danger' href='logout.php'>Log out</a>";
            
        }
        
        else{
            echo '<script>
            alert("Les données saisie sont incorrectes !"); 
            window.location.href="/../login.html";
            </script>';
        }
        
        ?>
    </div>
</body>
</html>