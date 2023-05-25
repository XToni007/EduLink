<?php
require '../control/function.php';

if(!empty($_SESSION["id"])){
  header("Location: ../index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: ../index.php");
  }
  elseif($result == 10){
    echo"<script>alert('Password Does Not Match');</script>";
    echo "<script>setTimeout(function(){ window.location.replace('login.php'); }, 0);</script>";
  }
  elseif($result == 100){
    echo"<script>alert('User Not Registered');</script>";
    echo "<script>setTimeout(function(){ window.location.replace('login.php'); }, 0);</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Podkova"/>
    <link rel="icon" type="images/png" href="../logo/logo.png"/>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header>
        <img src="../logo/logo.png"> 
        <p class="Logo" style="left: 10px; bottom: 8px; font-size: 40px;"><a href="index.php">EduLink</a></p>
        <p class="navbar"><a href="../service/services.php">Service</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../aboutus/aboutus.php">About Us</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../register/register.php">Register</a></p>
    </header>
    <div class="hamburger">
        <p>Service</p> 
        <p>About Us</p> 
        <p>Login</p>
    </div>
    <div class="center">
        <form method="post" action="">
            <h1>Login</h1>
            <label for="username">Username</label>
            <input type="text" id="username" name="usernameemail" autocomplete="off">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="off">
            <button class="submit" type="submit" name="submit">Login</button>
        </form>
        <h1 class="accreg">Don't Have an Account? <a href= "../register/register.php">Register Now</a></h1>
    </div>
    <footer>
        <p>Find us :</p>
        <img src="../assets/instagram.png">
        <img src="../assets/facebook.png">
        <img src="../assets/twitter.png">
    </footer>
</body>
</html>