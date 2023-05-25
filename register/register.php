<?php
require '../control/function.php';

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["username"], $_POST["email"], $_POST["password"]);

  if($result == 1){
    echo
    "<script> alert('Register Sucessful'); </script>";
    echo "<script>setTimeout(function(){ window.location.replace('../login/login.php'); }, 0);</script>";
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
    echo "<script>setTimeout(function(){ window.location.replace('register.php'); }, 0);</script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Cannot be Empty'); </script>";
    echo "<script>setTimeout(function(){ window.location.replace('register.php'); }, 0);</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Podkova"/>
    <link rel="icon" type="images/png" href="../logo/logo.png"/>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <header>
        <img src="../logo/logo.png"> 
        <p class="Logo" style="left: 10px; bottom: 8px; font-size: 40px;"><a href="index.php">EduLink</a></p>
        <p class="navbar"><a href="../service/services.php">Service</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../aboutus/aboutus.php">About Us</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../login/login.php">Login</a></p>
    </header>
    <div class="hamburger">
        <p>Service</p> 
        <p>About Us</p> 
        <p>Login</p>
    </div>
    <div class="center">
        <form method="post" action="">
            <h1>Register</h1>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" autocomplete="off">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="off">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="off">
            <button class="submit" type="submit" name="submit">Register</button>
        </form>
        <h1 class="accreg">Already Have an Account <a href= "../login/login.php">Login Now</a></h1>
    </div>
    <footer>
        <p>Find us :</p>
        <img src="../assets/instagram.png">
        <img src="../assets/facebook.png">
        <img src="../assets/twitter.png">
    </footer>
</body>
</html>