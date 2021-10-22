<!DOCTYPE html>
<html>
<head>
  <title>Systeme-Authentification</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light warning-color lighten-5">
  <a class="navbar-brand" href="index.php">Systeme-Authentification</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    
    </ul>
    <span class="navbar-text white-text">
          <?php


        if(!isset($_SESSION["username"])){

          echo '<a class="active" href="login.php">Sign in</a>';

        }else {
          echo '<a class="active" href="logout.php">Sign out</a>';
        }
      ?>
    </span>
  </div>
</nav>

<?php
require('config.php');
require('class.php');
session_start();
if (isset($_POST['username'])){

    $user = new USER();

  $user->username = stripslashes($_REQUEST['username']);
  $user->username = mysqli_real_escape_string($conn, $user->username);
  $user->password = stripslashes($_REQUEST['password']);
  $user->password = mysqli_real_escape_string($conn, $user->password);
    $query = "SELECT * FROM `user` WHERE username='$user->username' and password='$user->password'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  if($rows==1){
      $_SESSION['id']    = $row['id'];
      $_SESSION['username'] = $user->username;
      header("Location: index.php");
  }else{
    $message = "Incorrect username or password.";

  }
}
?>



  <div class="form-container">

      <form class="text-center border border-light p-5" action="" method="post" name="login">
        <h1>Sign in !</h1>
        <input type="text" class="form-control mb-4" name="username" placeholder="Username">
        <input type="password" class="form-control mb-4" name="password" placeholder="Password">
        <input type="submit" value="Sign in " name="submit" class="btn btn-outline-dark btn-block my-4">
        <p>New here?<a href="register.php"> Sign up here!</a></p>
        <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
      </form>
  </div>


</form>
</body>
</html>
